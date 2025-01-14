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
        <a href="{{ url('order1') }}" class="travel-book-now-btn">
            Book now <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section> 

</body>
</html>