<section>
    <h2>Popular Destinations</h2>
    <div class="destination-grid">
        @foreach ($popularDestination as $destination)
            <div class="destination-card">
                <div class="image-container">
                    <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}">
                </div>
                <div class="card-footer">
                    <div class="number-info">
                        <span class="number">{{ sprintf('%02d', $destination['id']) }}</span>
                        <span class="location">{{ $destination['location'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
