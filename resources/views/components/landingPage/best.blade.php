<div class="wrapper">
    <section class="blog-section container section">
        <div class="blog-sec-container">
            <div class="blog-sec-intro">
                <h2 data-aos="fade-up" data-aos-duration="2000" class="blog-sec-title">
                    Our Best Blog?
                </h2>
                <p data-aos="fade-up" data-aos-duration="2500">
                    An insight to the incredible experience in the world.
                </p>
            </div>

            <div class="blog-main-container grid">
                @foreach ($blogInformation as $post)
                    <div data-aos="fade-up" data-aos-duration="3000" class="blog-single-post grid">
                        <div class="blog-img-div">
                            <img src="{{ $post['postImage'][0] }}" alt="{{ $post['title'] }}">
                        </div>
                        <div class="blog-post-details">
                            <h3>{{ $post['title'] }}</h3>
                            <p>{{ $post['desc'] }}</p>
                        </div>
                        <div class="blog-read-more" onclick="location.href='{{ url('bestblog/' . $post['location']) }}'">
                            <span>Read More</span>
                            <i class="icon"></i>
                        </div>
                    </div>
                    <div class="postDetails">
                        <h3>{{ $post['title'] }}</h3>
                        <p>{{ $post['desc'] }}</p>
                    </div>
                    <div class="readmore" onclick="location.href='{{ url('blog/' . $post['location']) }}'">
                        <span>Read More</span>
                        <i class="icon"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
