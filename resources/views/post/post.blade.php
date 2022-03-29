@extends('welcome')
@section('postDetail')
    @if($posty->count())
        @foreach($posty as $post)
            <div class="item mb-5">
                <div class="postDetail">
                    <img class="img-fluid post-thumb d-none d-md-flex" src="/{{$post->photo}}" alt="wpis-{{$post->slug}}"><br>
                    <div class="media-body">
                        <h3 class="title mb-1">{{$post->title}}</h3>
                        {{--                    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>--}}
                        <div class="meta mb-1"><a href="{{ url('/category/'.$post->category->slug) }}">{{$post->category->name}}</a></div>
                        <div class="intro">{!! $post->content !!}</div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

