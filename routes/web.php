<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RobotController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/robot', function () {
    return view('robots');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('homes', HomeController::class);
Route::resource('abouts', AboutController::class);
Route::resource('services', ServiceController::class);
Route::resource('robots', RobotController::class);
Route::resource('contacts', ContactController::class);
Route::resource('teams', TeamController::class);


require __DIR__.'/auth.php';
