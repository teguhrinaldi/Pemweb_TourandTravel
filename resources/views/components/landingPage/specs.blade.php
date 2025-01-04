<div class="container">
    <h1>{{ $specDetails['name'] }}</h1>
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset($specDetails['img1'][0]) }}" class="img-fluid" alt="{{ $specDetails['name'] }}">
            <img src="{{ asset($specDetails['img2'][0]) }}" class="img-fluid" alt="{{ $specDetails['name'] }}">
            <img src="{{ asset($specDetails['img3'][0]) }}" class="img-fluid" alt="{{ $specDetails['name'] }}">
            <img src="{{ asset($specDetails['img4'][0]) }}" class="img-fluid" alt="{{ $specDetails['name'] }}">
        </div>
        <div class="col-lg-6">
            <h2>Rp. {{ $specDetails['prices'] }} 30% off</h2>
            <ul>
                <li>{{ $specDetails['lvroom'] }} Living Room</li>
                <li>{{ $specDetails['kitchen'] }} Kitchen</li>
                <li>{{ $specDetails['bedroom'] }} Bedrooms</li>
                <li>{{ $specDetails['bathroom'] }} Bathrooms</li>
                <li>{{ $specDetails['dinner'] }} Dinner room</li>
            </ul>
        </div>
    </div>
</div>
