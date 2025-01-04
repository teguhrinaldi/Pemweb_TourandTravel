<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman login dan register kustom
Route::view('/custom-login', 'components.login.login')->name('custom-login');
Route::view('/custom-register', 'components.register.register')->name('custom-register');

// Rute halaman utama landing
Route::get('/', function () {
    $popularDestination = [
        ['id' => 1, 'image' => 'assets/japan.jpg', 'title' => 'Destination 1', 'location' => 'JAPAN'],
        ['id' => 2, 'image' => 'assets/malaysia.jpg', 'title' => 'Destination 2', 'location' => 'MALAYSIA'],
        ['id' => 3, 'image' => 'assets/korea.jpg', 'title' => 'Destination 3', 'location' => 'KOREA'],
        ['id' => 4, 'image' => 'assets/thailand.jpg', 'title' => 'Destination 4', 'location' => 'THAILAND'],
        ['id' => 5, 'image' => 'assets/img2.jpg', 'title' => 'Destination 5', 'location' => 'SINGAPURE'],
    ];

    $offerInformation = [
        [
            'id' => 1,
            'imgSrc' => ['assets/housejap.jpg'],
            'location' => 'Japan',
            'price' => 'Rp. 4.500.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttle' => 'Shuttle'],
        ],
        [
            'id' => 2,
            'imgSrc' => ['assets/korearent.jpg'],
            'location' => 'Korea',
            'price' => 'Rp. 6.500.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttle' => 'Shuttle'],
        ],
        [
            'id' => 3,
            'imgSrc' => ['assets/singaporerent.jpg'],
            'location' => 'Singapore',
            'price' => 'Rp. 7.000.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttle' => 'Shuttle'],
        ],
         [
            'id' => 3,
            'imgSrc' => ['assets/thailandrent.jpg'],
            'location' => 'Thainland',
            'price' => 'Rp. 7.000.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttle' => 'Shuttle'],
        ],
    ];

    $blogInformation = [
        [
            'id' => 1,
            'postImage' => ['assets/beachsinga.jpg'],
            'title' => 'Beautiful East Coast Park Singapore',
            'desc' => 'Singapore East Coast Park is a 15 kilometer stretch of beach. While enjoying the sunshine and sea breeze, relax from the hustle and bustle of the city',
            'location' => 'japan',
        ],
        [
            'id' => 2,
            'postImage' => ['assets/fujim.jpg'],
            'title' => 'Fuji Mountain Japan',
            'desc' => 'Standing at 3,765 meters, Mount Fuji is Japan highest mountain, and has long been an icon of the country. This almost perfectly shaped volcano is one of Japan most popular and iconic tourist spots.',
            'location' => 'Japan',
        ],
        [
            'id' => 3,
            'postImage' => ['assets/jabo.jpg'],
            'title' => 'Jabo Village Thailand',
            'desc' => 'This small town on the northern border of Thailand has a holiday surprise for you. To be precise, at Jabo Village, you will find the beauty of a holiday above the sea of clouds.',
            'location' => 'Thailand',
        ],
        [
            'id' => 4,
            'postImage' => ['assets/langkawi.jpg'],
            'title' => 'Langkawi cable car Malaysia',
            'desc' => 'Langkawi cable car is a natural and famous tourist attraction in Malaysia. The cable car which is at the top of the second highest mountain in Langkawi has a height of 709 meters above sea level.',
            'location' => 'Malaysia',
        ],
    ];

    // Mengembalikan tampilan landing page dengan data
    return view('landingPage', compact('popularDestination', 'offerInformation', 'blogInformation'));
})->name('landing');


Route::get('/top/{id}', function ($id) {
    $destinations = [
        [
            'id' => 1,
            'image' => 'assets/japan.jpg',
            'title' => 'Tour and Travel C1',
            'description' => '  Japan is a captivating destination that seamlessly blends tradition and modernity, creating a unique and unforgettable travel experience. From the bustling metropolises of Tokyo and Osaka to the serene landscapes of Kyoto and Hokkaido, Japan offers a diverse range of attractions for every traveler.',
            'additional_info' => 'Whether your interested in ancient traditions, modern technology, delicious cuisine, or natural wonders, Japan offers a harmonious blend of the old and the new, making it an enchanting destination for any traveler.',
        ],
        [
            'id' => 2,
            'image' => 'assets/malaysia.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Explore the rich culture of Japan.',
            'additional_info' => 'Experience the fusion of tradition and modernity.',
        ],
        [
            'id' => 3,
            'image' => 'assets/korea.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Explore the rich culture of Japan.',
            'additional_info' => 'Experience the fusion of tradition and modernity.',
        ],
        [
            'id' => 4,
            'image' => 'assets/thailand.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Explore the rich culture of Japan.',
            'additional_info' => 'Experience the fusion of tradition and modernity.',
        ],
        [
            'id' => 5,
            'image' => 'assets/img2.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Explore the rich culture of Japan.',
            'additional_info' => 'Experience the fusion of tradition and modernity.',
        ],
    ];

    // Cari destinasi berdasarkan id
    $destination = collect($destinations)->firstWhere('id', $id);

    // Jika tidak ditemukan, beri response 404
    if (!$destination) {
        abort(404, 'Destination not found');
    }

    
    // dd($destination);
    // Kirim data ke view
    
    return view('components.landingPage.top', compact('destination'));

});

// Route ke Dashboard (tetap ada jika menggunakan auth Laravel Breeze)
// Rute ke dashboard (memerlukan autentikasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route untuk fitur profil (memerlukan autentikasi)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


<<<<<<< HEAD
// Menambahkan file auth.php untuk rute autentikasi lainnya
=======
>>>>>>> 1f93900f5d7f3b24421ecac1894c5d6aa0721926
require __DIR__.'/auth.php';
