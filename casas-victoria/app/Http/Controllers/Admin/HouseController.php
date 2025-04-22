<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\{
    House,
    Photo
};
use Illuminate\Contracts\Cache\Store;

class HouseController extends Controller
{
    /**
     * Display a page lisintg the houses registered
     */
    public function index(Request $request)
    {
        // Get all the houses
        $houses = House::with(['photos'])->get()->all();

        // Return the view
        return Inertia::render('Admin/House/Index', [
            'houses' => $houses,
        ]);
    }

    public function create(Request $request)
    {
        return Inertia::render('Admin/House/Create', [
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            "title" => "required|string|min:4|max:100",
            "description" => "nullable|string",
            "bedrooms" => "required|numeric|min:0|max:10",
            "bathrooms"=> "required|numeric|min:0|max:10",
            "garages" => "required|numeric|min:0|max:10",
            "surface" => "nullable|string|max:120",
            "dimensions" => "nullable|string|max:120",
            "address" => "required|string|max:200",
            'latitude' => 'nullable|required_with:longitude|numeric',
            'longitude' => 'nullable|required_with:latitude|numeric',
        ]);

        // Store the new house
        $newHouse = House::create( $validatedData );
        Log::info("New house ID: '$newHouse->id' created ");

        return redirect()->route('admin.houses.edit', ['house_id' => $newHouse->id]);
    }

    public function edit(Request $request, string $house_id)
    {
        $house = House::findOrFail($house_id);
        $photos = $this->getPhotosOfHouse($house);

        return Inertia::render('Admin/House/Edit', [
            'house' => $house,
            'photos' => $photos
        ]);
    }

    public function update( Request $request, string $house_id){

        // Validate the request
        $validatedData = $request->validate([
            "title" => "required|string|min:4|max:100",
            "description" => "nullable|string|max:200",
            "bedrooms" => "required|numeric|min:0|max:10",
            "bathrooms"=> "required|numeric|min:0|max:10",
            "garages" => "required|numeric|min:0|max:10",
            "surface" => "nullable|string|max:120",
            "dimensions" => "nullable|string|max:120",
            "address" => "required|string|max:200",
            'latitude' => 'nullable|required_with:longitude|numeric',
            'longitude' => 'nullable|required_with:latitude|numeric',
        ]);
        

        // Retrive the house model
        $house = House::findOrFail($house_id);
        $house->title = $validatedData['title'];
        $house->description = $validatedData['description'];
        $house->bedrooms = $validatedData['bedrooms'];
        $house->bathrooms = $validatedData['bathrooms'];
        $house->garages = $validatedData['garages'];
        $house->surface = $validatedData['surface'];
        $house->dimensions = $validatedData['dimensions'];
        $house->address = $validatedData['address'];
        $house->latitude = $validatedData['latitude'];
        $house->longitude = $validatedData['longitude'];
        $house->save();
        Log::info("House ID: '$house->id' updated ");

    }

    public function uploadImage(Request $request, string $house_id){
        $house = House::findOrFail($house_id);

        // * validate the house
        $this->validate( $request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        
        // TODO: convert image to webp

        // * prepare the image properties
        $photoID = Str::uuid();
        $extension = explode('.', $request->file('image')->getClientOriginalName());
        $extension = end($extension);
        $photoName = "$photoID.$extension";

        // * store the imagen and retrive the path
        $path = Storage::disk('photos')->putFileAs($house->id, $request->file('image'), $photoName);
        
        // * create record
        $newPhoto = Photo::create([
            'id' => $photoID,
            'title' => $request->file('image')->getBasename(),
            'path' => $path,
            'extension' => $extension,
            'house_id' => $house->id
        ]);

        Log::notice("New photo added to house id '{house}'", [
            "house" => $house->id
        ]);

    }


    public function showPhoto($photoId)
    {
        $photo = Photo::find($photoId);
        if (!Storage::disk('photos')->exists($photo->path)) {
            abort(404);
        }
        return response()->file(Storage::disk('photos')->path($photo->path));
    }


    /**
     * return the photos stored of the house
     *
     * @param  House $house
     * @return array
     */
    private function getPhotosOfHouse(House $house){

        $photosRaw = Photo::where('house_id', $house->id)->get()->all();

        /** @var Photo[] $photosRaw */
        $photos = array_map(function($photo) use($house){
            return (object) [
                "id" => $photo->id,
                "title" => $photo->title,
                "imageUrl" => "/photo/$house->id/$photo->id." . $photo->extension
            ];
        }, $photosRaw);

        return $photos;
    }

}