<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travel</title>
    <link rel="stylesheet" href="{{ asset('css/Blog_spg.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Tour And Travel</h1>
            <h2>C1</h2>
        </header>

        <div class="main-content">
            <div class="image-section">
                <img src="{{ asset('assets/beachsinga.jpg') }}" alt="Beach View" class="main-image">
                <div class="thumbnails">
                    <img src="{{ asset('assets/Eastcost/east1.jpg') }}" alt="Thumbnail 1">
                    <img src="{{ asset('assets/Eastcost/east2.jpg') }}" alt="Thumbnail 2">
                    <img src="{{ asset('assets/Eastcost/east3.jpg') }}" alt="Thumbnail 3">
                </div>
            </div>
            <div class="description">
                <h3>East Cost Park Singapore</h3>
                <div class="rating">⭐ 4.5</div>
                <p>
                    What is Redfish Lake known for? <br>
                    Redfish Lake is the final stop on the longest Pacific salmon run in North America,
                    which requires long-distance swimmers, such as Sockeye and Chinook Salmon,
                    to travel over 900 miles upstream to return to their spawning grounds. <br><br>
                    Redfish Lake is an alpine lake in Custer County, Idaho, just south of Stanley.
                    It is the largest lake within the Sawtooth National Recreation Area.
                </p>
            </div>
        </div>

        <div class="places">
            <div class="place">
                <img src="{{ asset('assets/Langkawi/langkawi1.jpg') }}" alt="Langkawi">
                <h4>Langkawi</h4>
                <p>📍 Malaysia</p>
                <button>Book Now</button>
            </div>
            <div class="place">
                <img src="{{ asset('assets/jabo/jabo1.jpg') }}" alt="Jabo Village">
                <h4>Jabo Village</h4>
                <p>📍 Thailand</p>
                <button>Book Now</button>
            </div>
            <div class="place">
                <img src="{{ asset('assets/Fuji/fuji1.jpg') }}" alt="Mountain Fuji">
                <h4>Mountain Fuji</h4>
                <p>📍 Japan</p>
                <button>Book Now</button>
            </div>
        </div>

        <button class="order-button">Order</button>
    </div>
</body>
</html>
