{{-- 

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>

        <hr>

        <h2>Comments</h2>
        @foreach ($post->comments as $comment)
            <div>{{ $comment->content }}</div>
        @endforeach

        <hr>

        <form action="{{ route('forum.post.comment', ['postId' => $post->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="content">Add a Comment</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection --}}
@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>

    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="cs-single_post">
                    <h2>{{ $post->title }}</h2>
                    <div class="cs-post_avatar">
                        <a href="#" class="cs-post_avatar_img"><img src="../assets/img/avatar/avatar_18.png"
                                alt="Avatr"></a>
                        <div class="cs-post_avatar_right">
                            <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">{{ $post->creator->name }}</a>
                            </h2>
                            <div class="cs-post_meta">
                                <span class="cs-post_meta_item">{{ $post->created_at }}</span>
                                <span class="cs-post_meta_item">{{ $post->comments->count() }} Comments</span>
                            </div>
                        </div>
                    </div>
                    <img src="../assets/img/single-post1.jpg" alt="">
                    <p>
                        {{ $post->content }}
                    </p>

                </div>
                <div class="cs-height_60 cs-height_lg_30"></div>
                <div id="comments" class="comments-area">
                    <h2 class="comments-title">Comments</h2>
                    <ol class="comment-list">


                        @foreach ($post->comments as $comment)
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="comment-author vcard">
                                        <img class="avatar" src="../assets/img/avatar/avatar_5.png" alt="Author">
                                        <a href="#" class="url">{{ $comment->user->name }}</a>

                                    </div>
                                    <div class="comment-meta">
                                        <a href="#">{{ $comment->created_at }} </a>
                                    </div>
                                    <p>{{ $comment->content }}</p>

                                </div>

                            </li>
                        @endforeach
                        @if (!$post->comments)
                            <p>No comments </p>
                        @endif
                    </ol>
                </div>
                <div class="cs-height_60 cs-height_lg_30"></div>
                <h3 class="comment-reply-title cs-semi_bold">Leave a comment</h3>
                <div id="respond" class="comment-respond cs-box_shadow cs-white_bg">
                    <form action="{{ route('forum.post.comment', ['postId' => $post->id]) }}" method="POST"
                        class="comment-form tb-comment-form cs-accent_4_bg">
                        @csrf

                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-form_field_wrap">
                            <textarea cols="30" rows="5" placeholder="Message..." class="cs-form_field" name="content"></textarea>
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <button class="cs-btn cs-style1 cs-btn_lg" type="submit"><span>Post Comment</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <h2 class="cs-section_heading cs-style1 text-center">Other Similar Posts</h2>
        <div class="cs-height_45 cs-height_lg_45"></div>
        <div class="row">
            @foreach ($similarPosts as $similarPost)
                <div class="col-lg-4">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                            <div class="cs-post_thumb_in cs-bg"
                                data-src="../assets/img/general/general_{{ $similarPost->id }}.jpg"></div>
                        </a>
                        <div class="cs-post_info">
                            <h2 class="cs-post_title"><a href="blog-details.html">{{ $similarPost->title }}</a></h2>
                            <div class="cs-post_subtitle">{{ $similarPost->content }}</div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-post_avatar">
                                <a href="#" class="cs-post_avatar_img"><img
                                        src="../assets/img/avatar/avatar_{{ ($similarPost->id % 10) + 10 }}.png"
                                        alt="Avatar"></a>
                                <div class="cs-post_avatar_right">
                                    <h2 class="cs-post_avatar_name cs-semi_bold"><a
                                            href="#">{{ $similarPost->creator->name }}</a></h2>
                                    <div class="cs-post_meta">
                                        <span
                                            class="cs-post_meta_item">{{ $similarPost->created_at->format('d M Y') }}</span>
                                        <span class="cs-post_meta_item">{{ $similarPost->comments->count() }}
                                            Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="cs-height_65 cs-height_lg_35"></div>
@endsection
