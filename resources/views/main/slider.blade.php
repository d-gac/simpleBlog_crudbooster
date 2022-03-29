@if($gallery->count())
<div class="row" style="margin-bottom: 30px">
    @foreach($gallery as $photo)

        @if($gallery->count() <= 1)<div class="col-md-12">
        @elseif($gallery->count() <= 2)<div class="col-md-6">
        @elseif($gallery->count() <= 3)<div class="col-md-4">
        @elseif($gallery->count() <= 4)<div class="col-md-3">
        @elseif($gallery->count() <= 6)<div class="col-md-2">
        @elseif($gallery->count() <= 12)<div class="col-md-1" style="margin-bottom: 10px;">
        @endif

            <div class="thumbnail">
            <a href="{{$photo->scr}}" target="_blank">
                <img src="{{$photo->scr}}" alt="{{$photo->alt}}" style="width:100%">
            </a>
        </div>
    </div>
    @endforeach
</div>
@endif
