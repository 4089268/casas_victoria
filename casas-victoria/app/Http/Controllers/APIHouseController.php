<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    House,
    Photo
};

class APIHouseController extends Controller
{

    public function houses()
    {
        $houses = House::with(['photos'])->get()->all();
        return response()->json($houses);
    }

}