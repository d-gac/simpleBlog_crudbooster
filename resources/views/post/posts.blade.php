    @if($posts)
        @foreach($posts as $post)
            <div class="item mb-5">
                <div class="media">

                    <a href="{{ url('/post/'.$post->slug) }}">
                    <img style="max-width: 300px;" class="mr-3 img-fluid post-thumb d-none d-md-flex"
                         src="/{{$post->photo}}" alt="wpis-{{$post->slug}}">
                    </a>

                    <div class="media-body">
                        <h3 class="title mb-1"><a href="{{ url('/post/'.$post->slug) }}">{{$post->title}}</a></h3>
                        {{--                    <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>--}}
                        <div class="meta mb-1"><a
                                href="{{ url('/category/'.$post->category->slug) }}">{{$post->category->name}}</a>
                        </div>
                        <div class="intro">{!! $post->short_content !!}</div>
                        <a href="{{ url('/post/'.$post->slug) }}">Więcej</a>
                    </div>

                </div>
            </div>
            <hr><br>
        @endforeach
        <div class="linksPosition">{{$posts->links('vendor.pagination.bootstrap-4')}}</div>
    @endif
    {{--@if($categories)--}}
    {{--    @foreach($categories as $categonpmry)--}}
    {{--        <a href="{{ url('/category/'.$category->slug) }}">{{$category->name}}</a>: <br>--}}
    {{--        <ul>--}}
    {{--        @foreach($category->post as $post)--}}
    {{--            <li><a href="{{ url('/post/'.$post->slug) }}">{{$post->title}}</a></li>--}}
    {{--        @endforeach--}}
    {{--        </ul>--}}
    {{--        <hr><br><br><br>--}}
    {{--    @endforeach--}}
    {{--@endif--}}

    {{--@if($categories_all)--}}
    {{--    @foreach($categories_all as $category)--}}
    {{--        @foreach($category->post as $post)--}}
    {{--            <div class="item mb-5">--}}
    {{--                <div class="media">--}}
    {{--                    <img style="max-width: 300px;" class="mr-3 img-fluid post-thumb d-none d-md-flex" src="/{{$post->photo}}" alt="wpis-{{$post->slug}}">--}}
    {{--                    <div class="media-body">--}}
    {{--                        <h3 class="title mb-1"><a href="{{ url('/post/'.$post->slug) }}">{{$post->title}}</a></h3>--}}
    {{--                        <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>--}}
    {{--                        <div class="meta mb-1"><a href="{{ url('/category/'.$post->category->slug) }}">{{$post->category->name}}</a></div>--}}
    {{--                        <div class="intro">{!! $post->short_content !!}</div>--}}
    {{--                        <a href="{{ url('/post/'.$post->slug) }}">Więcej</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <hr><br>--}}
    {{--        @endforeach--}}
    {{--    @endforeach--}}
    {{--@endif--}}

