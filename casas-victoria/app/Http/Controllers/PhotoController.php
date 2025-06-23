<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Photo;

class PhotoController extends Controller
{
    
    public function getPhoto($houseId, $fileName){
        
        // * load file fot the storage
        $path = storage_path( "app/photos/$houseId/$fileName");
        if (!File::exists($path)) {
            abort(404);
        }
        $type = File::mimeType($path);

        // * create a image-reference for resize
        $manager = new ImageManager(new Driver());
        $image = $manager->read($path);
        $image->scale(width:300);

        $response = Response::make($image->toPng(), 200);
        $response->header("Content-Type", "image/png");
        return $response;
    }

    public function getPhotoById($photoId)
    {
        $photo = Photo::findOrFail($photoId);
        
        // * load file fot the storage
        $path = storage_path( "app/photos/" . $photo->path);
        if (!File::exists($path))
        {
            abort(404);
        }
        $type = File::mimeType($path);

        

        // // * create a image-reference for resize
        // $manager = new ImageManager(new Driver());
        // $image = $manager->read($path);
        // $image->scale(width:300);

        // $response = Response::make($image->toPng(), 200);
        // $response->header("Content-Type", "image/png");
        // return $response;

        return response()->file($path, [
            'Content-Type' => $type
        ]);
    }

}
