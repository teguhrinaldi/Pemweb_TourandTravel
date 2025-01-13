<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
</head>
<body>

<section class="travel-container">
<<<<<<< HEAD
    @if(isset($destination))
        <div class="travel-image-section">
            <img src="{{ asset($destination['image']) }}" alt="Image of {{ $destination['title'] }}">
        </div>
        <div class="travel-content-section">
            <h1 class="travel-title">Discover the World with</h1>
            <h2 class="travel-subtitle">{{ $destination['title'] }}</h2>
            <p class="travel-description">
                {{ $destination['description'] }}
            </p>
            <p class="travel-description">
                {{ $destination['additional_info'] }}
            </p>
            <button class="travel-book-now-btn">
                Book now <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    @else
        <p>Destination not found. Please check the URL or try again later.</p>
    @endif
</section>

</body>
</html>
=======
    <div class="travel-image-section">
        <img src="{{ asset($destination['image']) }}" alt="Image of {{ $destination['title'] }}">

    </div>
    <div class="travel-content-section">
        <h1 class="travel-title">Discover the World with</h1>
        <h2 class="travel-subtitle">{{ $destination['title'] }}</h2>
        <p class="travel-description">
            {{ $destination['description'] }}
        </p>
        <p class="travel-description">
            {{ $destination['additional_info'] }}
        </p>
        <button class="travel-book-now-btn">
            Book now <i class="fas fa-arrow-right"></i>
        </button>
    </div>
</section> 

</body>
</html>
>>>>>>> 243e1b82351156c891ee970847f734fd3a11d947
