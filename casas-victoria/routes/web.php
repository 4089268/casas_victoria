<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\{
    HomeController,
    PhotoController,
    HouseController
};

Route::middleware('guest')->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/casas', [HomeController::class, 'getHouses'])->name('home.houses.get');
    Route::get('/casa/{house_id}', [HomeController::class, 'getHouse'])->name('home.house.get');
    Route::get('/casa/{house_id}/contact', [HomeController::class, 'getHouseContact'])->name('home.house.get');
});

Route::prefix("casas")->name("houses")->group(function()
{
    Route::get('', [HouseController::class, 'index'])->name('');
    Route::get('{house}', [HouseController::class, 'show'])->name('.show');
});

Route::get('photo/{houseId}/{fileName}', [PhotoController::class, 'getPhoto']);

Route::get('foto/{photo_id}', [PhotoController::class, 'getPhotoById']);


// Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::prefix('casas')->name('houses.')->group(function(){
//         Route::get('', [HouseController::class, 'index'])->name('index');
//         Route::get('create', [HouseController::class, 'create'])->name('create');
//         Route::post('create', [HouseController::class, 'store'])->name('store');
//         Route::get('{house_id}/edit', [HouseController::class, 'edit'])->name('edit');
//         Route::patch('{house_id}/edit', [HouseController::class, 'update'])->name('update');
//         Route::post('{house_id}/upload-photo', [HouseController::class, 'uploadImage'])->name('upload-photo');
//         Route::get('photo/{photoId}', [HouseController::class, 'showPhoto'])->name('show-photo');
//     });

// });

// require __DIR__.'/auth.php';