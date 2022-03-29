@extends('welcome')
@section('categoriesAll')

    @if($categories->count())
        @foreach($categories as $category)

            @if($category->post->count())
                <div style="margin-bottom: 50px">
                    <p class="titleOnTop">{{$category->name}}:</p>

                    @foreach($category->post as $post)

                        <div class="item mb-5" style="margin-bottom: 0 !important;">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="title mb-1"><a
                                            href="{{ url('/post/'.$post->slug) }}">{{$post->title}}</a></h3>
                                    @if( \Carbon\Carbon::now()->format('d.m.Y H:i:s') - $post->created_at->format('d.m.Y H:i:s') > 1 )
                                        {{\Carbon\Carbon::now()->format('d.m.Y H:i:s') - $post->created_at->format('d.m.Y H:i:s')}} dni temu
                                    @else
                                        Dziś
                                    @endif
                                    {{--                    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>--}}
                                    <div class="intro">{!! $post->short_content !!}</div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            @endif

        @endforeach
    @endif

@endsection

