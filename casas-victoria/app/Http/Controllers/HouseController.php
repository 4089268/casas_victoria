<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\House;

class HouseController extends Controller
{

    public function index(Request $request): Response
    {
        $houses = House::with(['photo'])->get()->all();

        return Inertia::render('House/Index', [
            'houses' => $houses
        ]);
    }

    public function show(Request $request, House $house): Response
    {
        // * load the relations
        $house->load(['photos','photo']);


        // * retrive the view
        return Inertia::render('House/Show', [
            'house' => $house
        ]);
    }

}
