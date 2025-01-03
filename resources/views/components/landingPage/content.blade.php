<section class="top-destinations-container">
    <!-- Header -->
    <div class="top-destinations-header">
        <h2>Top Destinations</h2>
        <p>Explore some of the most popular travel destinations around the world.</p>
    </div>

    <!-- Konten Grid -->
    <div class="top-destinations-grid">
        @foreach ($popularDestination as $destination)
            <div class="destination-card" data-url="{{ $destination['id'] == 'specificId' ? url('/specs') : url('destination/' . $destination['id']) }}">
                <!-- Gambar -->
                <div class="image-container">
                    <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}">
                    <div class="overlay-info">
                        <h3>{{ $destination['title'] }}</h3>
                        <p>{{ $destination['location'] }}</p>
                    </div>
                </div>
                <!-- Footer -->
                <div class="card-footer">
                    <div class="number">{{ sprintf('%02d', $destination['id']) }}</div>
                    <div class="destination-info">
                        {{ $destination['location'] }}
                        <span class="dot">•</span> Dot
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<link rel="stylesheet" href="{{ asset('css/content.css') }}">

