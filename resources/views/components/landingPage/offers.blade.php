<section class="offer container section">
    <div class="secContainer">
        <div data-aos="fade-up" data-aos-duration="2000" class="secIntro">
            <h2 class="secTtile">Special Offers</h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta,
                vitae quis explicabo neque nesciunt blanditiis?
            </p>
        </div>

        <div class="mainContent grid">
            @foreach($offerInformation as $offer)
                <div data-aos="fade-up" data-aos-duration="3000" class="singleOffer">
                    <div class="destImage">
                        <img src="{{ $offer['imgSrc'][0] }}" alt="pic-title" />
                        <span class="discount">{{ $offer['discount'] }}% Off</span>
                    </div>

                    <div class="offerBody">
                        <div class="price flex">
                            <h4>{{ $offer['price'] }}</h4>
                            <span class="status">For Rent</span>
                        </div>

                        <div class="amenities flex">
                            <div class="singleAmenity flex">
                                <i class="fa-solid fa-bed icon"></i>
                                <small>{{ $offer['facilities']['bed'] }}</small>
                            </div>
                            <div class="singleAmenity flex">
                                <i class="fa-solid fa-bath icon"></i>
                                <small>{{ $offer['facilities']['bath'] }}</small>
                            </div>
                            <div class="singleAmenity flex">
                                <i class="fa-solid fa-wifi icon"></i>
                                <small>{{ $offer['facilities']['wifi'] }}</small>
                            </div>
                            <div class="singleAmenity flex">
                                <i class="fa-solid fa-shuttle-van icon"></i>
                                <small>{{ $offer['facilities']['shuttle'] }}</small>
                            </div>
                        </div>

                        <div class="location flex">
                            <i class="fa-solid fa-location-dot icon"></i>
                            <small>alamat, {{ $offer['location'] }}.</small>
                        </div>
                        <button class="btn flex" onclick="window.location='{{ url('specs/' . $offer['location']) }}'">
                            View Details
                            <i class="fa-solid fa-arrow-right icon"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>