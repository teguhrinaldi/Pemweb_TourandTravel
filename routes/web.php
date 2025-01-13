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

// Rute untuk halaman detail destinasi
Route::get('/top/{id}', function ($id) {
    $destinations = [
        [
            'id' => 1,
            'image' => 'assets/japan.jpg',
            'title' => 'Tour and Travel C1',
            'description' => '  Japan is a captivating destination that seamlessly blends tradition and modernity, creating a unique and unforgettable travel experience. From the bustling metropolises of Tokyo and Osaka to the serene landscapes of Kyoto and Hokkaido, Japan offers a diverse range of attractions for every traveler.',
            'additional_info' => 'Whether you are interested in ancient traditions, modern technology, delicious cuisine, or natural wonders, Japan offers a harmonious blend of the old and the new, making it an enchanting destination for any traveler.',
        ],
        [
            'id' => 2,
            'image' => 'assets/malaysia.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Malaysia is a vibrant destination that beautifully weaves together rich cultural heritage and modern sophistication, offering an unforgettable journey for every traveler. From the bustling streets of Kuala Lumpur and George Town to the serene beaches of Langkawi and the lush rainforests of Borneo, Malaysia showcases a diverse array of attractions.',
            'additional_info' => 'Whether you are captivated by traditional customs, futuristic skylines, tantalizing cuisine, or breathtaking natural beauty, Malaysia offers a perfect blend of the old and the new, making it a truly enchanting destination for all who visit.',
        ],
        [
            'id' => 3,
            'image' => 'assets/korea.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'South Korea is a dynamic destination where ancient traditions and cutting-edge innovation coexist in perfect harmony, creating a travel experience like no other. From the bustling streets of Seoul and Busan to the tranquil landscapes of Jeju Island and Gyeongju, South Korea offers a wealth of attractions for every type of traveler.',
            'additional_info' => 'Whether you are drawn to its rich history, K-pop culture, mouthwatering cuisine, or stunning natural scenery, South Korea seamlessly blends the charm of its heritage with the excitement of its modernity, making it a captivating destination for all.',
        ],
        [
            'id' => 4,
            'image' => 'assets/thailand.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Thailand is a mesmerizing destination that effortlessly combines cultural richness with natural beauty, offering an unforgettable experience for every traveler. From the vibrant city life of Bangkok and Chiang Mai to the pristine beaches of Phuket and Krabi, Thailand boasts a diverse array of attractions to explore.',
            'additional_info' => 'Whether you are fascinated by its ancient temples, lively street markets, delectable cuisine, or breathtaking islands, Thailand offers a harmonious blend of tradition and tropical charm, making it a truly enchanting destination for all who visit.',
        ],
        [
            'id' => 5,
            'image' => 'assets/img2.jpg',
            'title' => 'Tour and Travel C1',
            'description' => 'Singapore is a dazzling destination where innovation meets tradition, offering a world-class travel experience in a compact and vibrant setting. From the iconic Marina Bay Sands and Gardens by the Bay to the charming neighborhoods of Chinatown and Little India, Singapore is a city of endless discoveries.',
            'additional_info' => 'Whether you are intrigued by its cutting-edge architecture, rich cultural heritage, exquisite cuisine, or lush urban greenery, Singapore seamlessly blends modern sophistication with timeless charm, making it an extraordinary destination for every traveler.',
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
Route::get('/specs/{location}', function ($location) {
    $specDetails = [
        [
            'id' => 1,
            'img1' => ['assets/housejap.jpg'],
            'img2' => ['assets/housejap2.jpg'],
            'img3' => ['assets/housejap3.jpg'],
            'img4' => ['assets/housejap4.jpg'],
            'name' => 'Japan Building',
            'prices' => 'Rp. 4.500.000',
            'lvroom' => 1,
            'kitchen' => 1,
            'bedroom' => 2,
            'bathroom' => 2,
            'dinner' => 1,
            'location' => 'JAPAN',
            'discount' => '30%'
        ],
        [
            'id' => 2,
            'img1' => ['assets/korearent.jpg'],
            'img2' => ['assets/housejap2.jpg'],
            'img3' => ['assets/housejap3.jpg'],
            'img4' => ['assets/housejap4.jpg'],
            'name' => 'Korea Building',
            'prices' => 'Rp. 5.500.000',
            'lvroom' => 1,
            'kitchen' => 1,
            'bedroom' => 2,
            'bathroom' => 1,
            'dinner' => 1,
            'location' => 'KOREA',
            'discount' => '30%'
        ],
        [
            'id' => 3,
            'img1' => ['assets/singaporerent.jpg'],
            'img2' => ['assets/housejap2.jpg'],
            'img3' => ['assets/housejap3.jpg'],
            'img4' => ['assets/housejap4.jpg'],
            'name' => 'Singapore Building',
            'prices' => 'Rp. 7.000.000',
            'lvroom' => 1,
            'kitchen' => 1,
            'bedroom' => 2,
            'bathroom' => 1,
            'dinner' => 1,
            'location' => 'SINGAPORE',
            'discount' => '30%'
        ],
        [
            'id' => 4,
            'img1' => ['assets/thairent.jpg'],
            'img2' => ['assets/housejap2.jpg'],
            'img3' => ['assets/housejap3.jpg'],
            'img4' => ['assets/housejap4.jpg'],
            'name' => 'Singapore Building',
            'prices' => 'Rp. 4.000.000',
            'lvroom' => 1,
            'kitchen' => 1,
            'bedroom' => 2,
            'bathroom' => 1,
            'dinner' => 1,
            'location' => 'THAILAND',
            'discount' => '30%'
        ],
    ];

    $location = strtoupper($location);

    $filteredSpec = collect($specDetails)->firstWhere('location', $location);

    if (!$filteredSpec) {
        abort(404, 'Specifications not found for the requested location.');
    }

    return view('components.landingPage.specs', [
        'specDetails' => $filteredSpec,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Menambahkan file auth.php untuk rute autentikasi lainnya
require __DIR__.'/auth.php';
