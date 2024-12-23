<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route ke Landing Page
Route::get('/', function () {
    $popularDestination = [
        ['id' => 1, 'image' => 'assets/japan.jpg', 'title' => 'Destination 1', 'location' => 'Location 1'],
        ['id' => 2, 'image' => 'assets/malaysia.jpg', 'title' => 'Destination 2', 'location' => 'Location 2'],
        ['id' => 3, 'image' => 'assets/korea.jpg', 'title' => 'Destination 3', 'location' => 'Location 3'],
    ];

    return view('landingPage', compact('popularDestination'));
})->name('landing');

// Route ke Dashboard (tetap ada jika menggunakan auth Laravel Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route untuk fitur profile (tetap jika digunakan)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

