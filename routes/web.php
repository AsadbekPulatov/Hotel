<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index'])->name('index');
Route::get('/service', [ViewController::class, 'service'])->name('service');
Route::get('/service/{id}', [ViewController::class, 'service_single'])->name('service.single');
Route::get('/booking', [ViewController::class, 'booking'])->name('booking');
Route::get('/locations', [ViewController::class, 'locations'])->name('locations');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource("/carousels", CarouselController::class);
    Route::resource("/rooms", RoomController::class);
    Route::resource("/services", ServiceController::class);
    Route::resource("/abouts", AboutController::class);
});

require __DIR__.'/auth.php';
