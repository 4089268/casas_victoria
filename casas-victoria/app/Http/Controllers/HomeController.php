<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

use App\Models\House;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index(Request $request): Response
    {
        // * get random 4 elements
        $houses = House::with('photo')->inRandomOrder()->take(4)->get()->all();
        
        return Inertia::render('Welcome', [
            'appName' => 'Casas Victoria',
            'copyrigth' => '2025',
            'houses' => $houses
        ]);
    }

}
