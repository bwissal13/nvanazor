@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>
    <section class="cs-page_head cs-bg"
        data-src="https://thememarch.com/demo/html/enfhess-html/enfhess-dark/assets/img/page_head_bg.svg">
        <div class="container">
            <div class="text-center">
                <h1 class="cs-page_title">Our Forum</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/forum/add-post" class="cs-btn cs-style1">Add
                            Post</a></li>

                </ol>

            </div>

        </div>
    </section>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    <div class="col-lg-12">
                        @if ($posts->isNotEmpty() && $posts->first()->topic_id)
                            <div class="cs-post cs-style1 cs-type1 cs-size_md"data-topic="{{ $posts->first()->topic_id }}">
                                <a href="http://127.0.0.1:8000/forum/post/{{ $posts->first()->id }}/comment"
                                    class="cs-post_thumb">
                                    <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_22.jpg">
                                    </div>
                                </a>
                                <div class="cs-post_info">
                                    <h2 class="cs-post_title"><a
                                            href="http://127.0.0.1:8000/forum/post/{{ $posts->first()->id }}/comment">
                                            {{ $posts->first()->title }}</a></h2>
                                    <div class="cs-post_subtitle"> {{ $posts->first()->content }}</div>
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                    <div class="cs-post_avatar">
                                        <a href="#" class="cs-post_avatar_img"><img
                                                src="../assets/img/avatar/avatar_18.png" alt="Avatar"></a>
                                        <div class="cs-post_avatar_right">
                                            <h2 class="cs-post_avatar_name cs-semi_bold"><a
                                                    href="#">{{ $posts->first()->creator->name }}</a></h2>
                                            <div class="cs-post_meta">
                                                <span class="cs-post_meta_item"> {{ $posts->first()->created_at }}</span>

                                                <span class="cs-post_meta_item">{{ $posts->first()->comments->count() }}
                                                    Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#"
                                    onclick="event.preventDefault();
    if (confirm('Are you sure you want to delete this post?')) {
        document.getElementById('delete-form').submit();
    }">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z" />
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M19 6h-4.82l-1.21-1.21c-.09-.09-.22-.14-.35-.14H10V4c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v.79L6.21 6H2c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1h1.38l1.42 11.34c.1.75.74 1.32 1.5 1.32h10c.76 0 1.4-.57 1.5-1.32L21.62 10H23c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1zm-5-1.97V4h-4v.03L9.83 4H14zM4 8h16l-1.19 9.56c-.04.33-.33.59-.7.59H5.89c-.37 0-.67-.26-.7-.59zm10-2h2v2h-2V6zm-4 0h2v2h-2V6z" />
                                    </svg>
                                </a>
                                <a href="{{ route('forum.post.edit', $posts->first()->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path d="M16.59 9L14 6.41 18.59 2 21 4.41 16.59 9zm-11.42 11.42L14 7.83 16.59 10.4 6.17 20.83zM3.41 18.17l1.42 1.42L5 21l-1.83.01L2 19.59l1.41-1.42zM18.17 5.41L19.59 4l1.42 1.42L19.59 7 18.17 5.41z"/>
                                    </svg>
                                    
                                    
                                </a>
                                
                                <form id="delete-form" action="{{ route('forum.post.delete', $posts->first()->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </div>
                        @endif
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                    <div id="postsPlaceholder"></div>

                    @foreach ($posts->slice(1) as $post)
                        <div class="col-lg-6">
                            <div class="cs-post cs-style1"data-topic="{{ $post->topic_id }}">
                                <a href="http://127.0.0.1:8000/forum/post/{{ $post->id }}/comment"
                                    class="cs-post_thumb">
                                    <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_16.jpg">
                                    </div>
                                </a>
                                <div class="cs-post_info">
                                    <h2 class="cs-post_title"><a
                                            href="http://127.0.0.1:8000/forum/post/{{ $post->id }}/comment">{{ $post->title }}</a>
                                    </h2>
                                    <div class="cs-post_subtitle">{{ $post->content }}</div>
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                    <div class="cs-post_avatar">
                                        <a href="#" class="cs-post_avatar_img"><img
                                                src="../assets/img/avatar/avatar_18.png" alt="Avatar"></a>
                                        <div class="cs-post_avatar_right">
                                            <h2 class="cs-post_avatar_name cs-semi_bold"><a
                                                    href="#">{{ $post->creator->name }}</a></h2>
                                            <div class="cs-post_meta">
                                                <span class="cs-post_meta_item">{{ $post->created_at }}</span>
                                                <span class="cs-post_meta_item">{{ $post->comments->count() }}
                                                    Comments</span>

                                            </div>
                                            <a href="{{ route('forum.post.edit', $post->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                                    <path d="M16.59 9L14 6.41 18.59 2 21 4.41 16.59 9zm-11.42 11.42L14 7.83 16.59 10.4 6.17 20.83zM3.41 18.17l1.42 1.42L5 21l-1.83.01L2 19.59l1.41-1.42zM18.17 5.41L19.59 4l1.42 1.42L19.59 7 18.17 5.41z"/>
                                                </svg>
                                                
                                                
                                            </a>
                                                 
                                            <a href="#"
                                    onclick="event.preventDefault();
    if (confirm('Are you sure you want to delete this post?')) {
        document.getElementById('delete-form').submit();
    }">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z" />
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M19 6h-4.82l-1.21-1.21c-.09-.09-.22-.14-.35-.14H10V4c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v.79L6.21 6H2c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1h1.38l1.42 11.34c.1.75.74 1.32 1.5 1.32h10c.76 0 1.4-.57 1.5-1.32L21.62 10H23c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1zm-5-1.97V4h-4v.03L9.83 4H14zM4 8h16l-1.19 9.56c-.04.33-.33.59-.7.59H5.89c-.37 0-.67-.26-.7-.59zm10-2h2v2h-2V6zm-4 0h2v2h-2V6z" />
                                    </svg>
                                </a>

                                <form id="delete-form" action="{{ route('forum.post.delete', $posts->first()->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                        </div>
                                    </div>
                                </div>
                               

                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                    @endforeach

                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                {{-- <div class="text-center">
                    <a href="#" class="cs-btn cs-style1 cs-btn_lg"><span>Load More</span></a>
                </div> --}}
            </div>

        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
