<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $popularDestination = [
        ['id' => 1, 'image' => 'assets/japan.jpg', 'title' => 'Destination 1', 'location' => 'JAPAN'],
        ['id' => 2, 'image' => 'assets/malaysia.jpg', 'title' => 'Destination 2', 'location' => 'MALAYSIA'],
        ['id' => 3, 'image' => 'assets/korea.jpg', 'title' => 'Destination 3', 'location' => 'KOREA'],
    ];

    $offerInformation = [
        [
            'id' => 1,
            'imgSrc' => ['assets/housejap.jpg'],
            'location' => 'Japan',
            'price' => 'Rp. 4.500.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttel' => 'Shuttle'],
        ],
        [
            'id' => 2,
            'imgSrc' => ['assets/korearent.jpg'],
            'location' => 'Korea',
            'price' => 'Rp. 6.500.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttel' => 'Shuttle'],
        ],
        [
            'id' => 3,
            'imgSrc' => ['assets/singaporerent.jpg'],
            'location' => 'Singapore',
            'price' => 'Rp. 7.000.000',
            'discount' => 30,
            'facilities' => ['bed' => 2, 'bath' => 1, 'wifi' => 'Wi-Fi', 'shuttel' => 'Shuttle'],
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

    return view('landingPage', compact('popularDestination', 'offerInformation', 'blogInformation'));
})->name('landing');

Route::get('/top/{id}', function ($id) {
    $details = [
        'japan' => [
            'title' => 'Japan',
            'description' => 'Japan is a captivating destination that seamlessly blends tradition and modernity, creating a unique and unforgettable travel experience.',
            'image' => 'japan.jpg',
        ],
    ];

    if (!array_key_exists($id, $details)) {
        abort(404);
    }

    $location = $details[$id];
    dd($location); // Debug data sebelum dikirim ke view

    return view('components.landingPage.top', ['location' => $location]);
});




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
