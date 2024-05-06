<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function index( Request $request){
        return Inertia::render('Admin/Dashboard', [
            'appName' => 'Casas Victoria Administrador',
            'copyrigth' => '2024',
        ]);
    }

}