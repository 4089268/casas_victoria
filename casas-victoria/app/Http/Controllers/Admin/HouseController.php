<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use App\Models\{
    House
};

class HouseController extends Controller
{
    /**
     * Display the home page
     */
    public function index(Request $request)
    {
        // Get all the houses
        $houses = House::all();

        // Return the view
        return Inertia::render('Admin/House/Index', [
            'houses' => $houses
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

        // Store the new house
        $newHouse = House::create( $validatedData );
        Log::info("New house ID: '$newHouse->id' created ");

        return redirect()->route('admin.houses.edit', ['house_id' => $newHouse->id]);
    }

    public function edit(Request $request, string $house_id)
    {
        $house = House::findOrFail($house_id);

        return Inertia::render('Admin/House/Edit', [
            'house' => $house
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


}
