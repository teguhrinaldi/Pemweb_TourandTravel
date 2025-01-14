<link rel="stylesheet" href="{{ asset('css/specs.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<section>
    <div class="container">
        <div class="header">
            <div class="title">Tour And Travel C1</div>
            <button class="btn" onclick="window.location='{{ url('') }}'">Home</button>
        </div>
        <div class="building-name">
            <p>{{ $specDetails['name'] }}</p>
        </div>
        <div class="image-container">
            <img id="mainImage" src="{{ asset($specDetails['img1'][0]) }}" alt="{{ $specDetails['name'] }}" class="main-image">
            <div class="info-container">
                <div class="amenities flex">
                    <div class="flex" style="font-size: 28px; font-weight: light; margin-bottom: 10px; color: rgb(0, 0, 0);">
                        <p>{{ $specDetails['prices'] }}</p>
                    </div>
                    <div class="flex" style="font-size: 28px; font-weight: light; color: orange; margin-bottom: 10px;">
                        <p>{{ $specDetails['discount'] }}</p>
                    </div>
                </div>
                <div class="amenities flex">
                    <div class="flex">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <div class="flex">
                        <p>{{ $specDetails['lvroom'] }} Living Room</p>
                    </div>
                </div>
                <div class="amenities flex">
                    <div class="flex">
                        <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <div class="flex">
                        <p> {{ $specDetails['kitchen'] }} Kitchen</p>
                    </div>
                </div>
                <div class="amenities flex">
                    <div class="flex">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <div class="flex">
                        <p> {{ $specDetails['bedroom'] }} Bedroom</p>
                    </div>
                </div>
                <div class="amenities flex">
                    <div class="flex">
                        <i class="fa-solid fa-shower"></i>
                    </div>
                    <div class="flex">
                        <p> {{ $specDetails['bathroom'] }} Bathroom</p>
                    </div>
                </div>
                <div class="amenities flex">
                    <div class="flex">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <div class="flex">
                        <p> {{ $specDetails['dinner'] }} Dinner Room</p>
                    </div>
                </div> 
                <div>
                    <div class="btn-order">
                        <button class="btn" onclick="window.location='{{ route('order', ['location' => $location]) }}'">Order</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="image-gallery grid">
            <div class="image-item">
                <img src="{{ asset($specDetails['img1'][0]) }}" alt="{{ $specDetails['name'] }}" onclick="galleryFunction(this)">
            </div>
            <div class="image-item">
                <img src="{{ asset($specDetails['img2'][0]) }}" alt="{{ $specDetails['name'] }}" onclick="galleryFunction(this)">
            </div>
            <div class="image-item">
                <img src="{{ asset($specDetails['img3'][0]) }}" alt="{{ $specDetails['name'] }}" onclick="galleryFunction(this)">
            </div>
            <div class="image-item">
                <img src="{{ asset($specDetails['img4'][0]) }}" alt="{{ $specDetails['name'] }}" onclick="galleryFunction(this)">
            </div>
        </div>
        <div class="card-star">
            <h4>Rate this house</h4>
            <span onclick="gfg(1)"
                class="star">★
            </span>
            <span onclick="gfg(2)"
                class="star">★
            </span>
            <span onclick="gfg(3)"
                class="star">★
            </span>
            <span onclick="gfg(4)"
                class="star">★
            </span>
            <span onclick="gfg(5)"
                class="star">★
            </span>
        </div>
    </div>
    <script>
        function galleryFunction(smallImage) {
            var fullImage = document.getElementById("mainImage");
            fullImage.src = smallImage.src;
        }
        let stars = 
            document.getElementsByClassName("star");
        let output = 
            document.getElementById("output");
        
        function gfg(n) {
            remove();
            for (let i = 0; i < n; i++) {
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                stars[i].className = "star " + cls;
            }
            output.innerText = "Rating is: " + n + "/5";
        }
        
        function remove() {
            let i = 0;
            while (i < 5) {
                stars[i].className = "star";
                i++;
            }
        }
    </script>
</section>
