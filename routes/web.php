<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PublicHomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Módulos del Sistema Turismo Accesible
    Route::resource('locations', \App\Http\Controllers\LocationController::class);
    Route::resource('disabilities', \App\Http\Controllers\DisabilityController::class);
    Route::resource('tourism-routes', \App\Http\Controllers\TourismRouteController::class);
});

require __DIR__.'/auth.php';
