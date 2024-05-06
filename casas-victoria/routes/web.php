<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\{
    HomeController
};

use App\Http\Controllers\Admin\{
    DashboardController
};

Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/casas', [HomeController::class, 'getHouses'])->name('home.houses.get');
    Route::get('/casa/{house_id}', [HomeController::class, 'getHouse'])->name('home.house.get');
    Route::get('/casa/{house_id}/contact', [HomeController::class, 'getHouseContact'])->name('home.house.get');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', [DashboardController::class, 'index']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});


require __DIR__.'/auth.php';
