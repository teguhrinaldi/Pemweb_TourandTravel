<section class="blog container section">
    <div class="secContainer">
        <div class="secIntro">
            <h2 data-aos="fade-up" data-aos-duration="2000" class="secTitle">
                Our Best Blog?
            </h2>
            <p data-aos="fade-up" data-aos-duration="2500">
                An insight to the incredible experience in the world.
            </p>
        </div>

        <div class="mainContainer grid">
            @foreach ($blogInformation as $post)
                <div data-aos="fade-up" data-aos-duration="3000" class="singlePost grid">
                    <div class="imgDiv">
                        <img src="{{ $post['postImage'][0] }}" alt="{{ $post['title'] }}">
                    </div>
                    <div class="postDetails">
                        <h3>{{ $post['title'] }}</h3>
                        <p>{{ $post['desc'] }}</p>
                    </div>
                    <div class="readmore" onclick="location.href='{{ url('bestblog/' . $post['location']) }}'">
                        <span>Read More</span>
                        <i class="icon"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
