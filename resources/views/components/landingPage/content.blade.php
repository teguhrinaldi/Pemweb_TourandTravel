<section class="top-destinations-container">
    <!-- Header -->
    <div class="top-destinations-header">
        <h2>Top Destinations</h2>
        <p>Explore some of the most popular travel destinations around the world.</p>
    </div>

    <!-- Konten Grid -->
    <div class="top-destinations-grid">
        @foreach ($popularDestination as $destination)
            <div class="destination-card">
                <!-- Gambar -->
                <div class="image-container">
                    <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}">
                </div>
                <!-- Footer -->
                <div class="card-footer">
                    <div class="number-info">
                        <span class="number">{{ sprintf('%02d', $destination['id']) }}</span>
                        <span class="location">{{ $destination['location'] }}</span>
                    </div>
                    <div class="dot-info">
                        <span class="dot">•</span> Dot
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
