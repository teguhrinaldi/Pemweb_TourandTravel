@foreach($specDetails as $details)
    <div class="container">
        <h1>{{ $details ['name']}}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $details ['img1'][0] }}" class="img-fluid" alt="{{ $details ['name'] }}">
            </div>
            <div class="col-md-6">
                <h2>Rp. {{ $details ['prices'] }}</h2>
                <p><strong>30% Off</strong></p>
                <ul>
                    <li>{{ $details ['lvroom']}} Living Room</li>
                    <li>{{ $details ['kitchen']}} Kitchen</li>
                    <li>{{ $details ['bedroom']}} Bedrooms</li>
                    <li>{{ $details ['bathroom']}} Bathrooms</li>
                    <li>{{ $details ['dinner'] }}</li>
                </ul>
                <button class="btn btn-warning">Order</button>
            </div>
        </div>
    </div>
@endforeach