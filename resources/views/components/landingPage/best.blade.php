<div class="wrapper">
    <section class="blog-section container section">
        <div class="blog-sec-container">
            <!-- Section Intro -->
            <div class="blog-sec-intro">
                <h2 data-aos="fade-up" data-aos-duration="2000" class="blog-sec-title">
                    Our Best Blog
                </h2>
                <p data-aos="fade-up" data-aos-duration="2500">
                    An insight to the incredible experience in the world.
                </p>
            </div>

            <!-- Main Blog Content -->
            <div class="blog-main-container grid">
                @foreach ($blogInformation as $post)
                    <!-- Single Blog Post -->
                    <div data-aos="fade-up" data-aos-duration="3000" class="blog-single-post grid">
                        <div class="blog-img-div">
                            <img src="{{ $post['postImage'][0] }}" alt="{{ $post['title'] }}">
                        </div>
                        <div class="blog-post-details">
                            <h3>{{ $post['title'] }}</h3>
                            <p>{{ $post['desc'] }}</p>
                        </div>
                        <!-- Read More Button -->
                        <div class="blog-read-more" onclick="location.href='{{ url('blog/' . $post['location']) }}'">
                        <a href="{{ url('blog/' . $post['id']) }}">Read More</a>
                            <i class="icon"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>