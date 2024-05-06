<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    /**
     * Display the home page
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Admin/House/Index', [
        ]);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Admin/House/Create', [
        ]);
    }

}
