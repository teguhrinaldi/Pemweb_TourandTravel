@foreach($specimages as $images)
<div>
    <img src="{{ $images['img'][0] }}" alt="pic-title" />
</div>
@endforeach