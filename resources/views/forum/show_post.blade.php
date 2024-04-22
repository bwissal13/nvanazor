
{{-- @extends('layouts.app')

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
            <input type="text" name="post_id" value="{{ $postId }}">

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
                            <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">{{ $post->creator->name }}</a></h2>
                            <div class="cs-post_meta">
                                <span class="cs-post_meta_item">{{ $post->created_at}}</span>
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
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-author vcard">
                                    <img class="avatar" src="../assets/img/avatar/avatar_5.png" alt="Author">
                                    <a href="#" class="url">George Steven</a>
                                </div>
                                <div class="comment-meta">
                                    <a href="#">Jan 24, 2022 at 9:59 am </a>
                                </div>
                                <p>Donec pellentesque luctus tortor finibus blandit. Fusce tincidunt lectus augue, quis
                                    commodo justo tincidunt eget. Praesent at elit diam. Tortor finibus blandit</p>
                                <div class="reply"><a class="comment-reply-link" href="#">
                                        Reply
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 5.74707H8.5C10.0913 5.74707 11.6174 6.37921 12.7426 7.50443C13.8679 8.62965 14.5 10.1558 14.5 11.7471V13.2471M1 5.74707L5.5 10.2471M1 5.74707L5.5 1.24707"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a></div>
                            </div>
                            <ol class="children">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-author vcard">
                                            <img class="avatar" src="../assets/img/avatar/avatar_11.png" alt="Author">
                                            <a href="#" class="url">Sarah Taylor</a>
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#">Jan 24, 2022 at 9:59 am </a>
                                        </div>
                                        <p>Thanks bro 🙂</p>
                                        <div class="reply"><a class="comment-reply-link" href="#">
                                                Reply
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 5.74707H8.5C10.0913 5.74707 11.6174 6.37921 12.7426 7.50443C13.8679 8.62965 14.5 10.1558 14.5 11.7471V13.2471M1 5.74707L5.5 10.2471M1 5.74707L5.5 1.24707"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a></div>
                                    </div>
                                </li>
                            </ol>
                        </li>
                        <li class="comment cs-accent_4_bg">
                            <div class="comment-body">
                                <div class="comment-author vcard">
                                    <img class="avatar" src="../assets/img/avatar/avatar_7.png" alt="Author">
                                    <a href="#" class="url">Jhon Doe</a>
                                </div>
                                <div class="comment-meta">
                                    <a href="#">Jan 24, 2022 at 9:59 am </a>
                                </div>
                                <p>Fusce tincidunt lectus augue, quis commodo justo tincidunt eget. Praesent at elit
                                    diam. Tortor finibus blandit. Donec pellentesque luctus tortor finibus blandit.</p>
                                <div class="reply"><a class="comment-reply-link" href="#">
                                        Reply
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 5.74707H8.5C10.0913 5.74707 11.6174 6.37921 12.7426 7.50443C13.8679 8.62965 14.5 10.1558 14.5 11.7471V13.2471M1 5.74707L5.5 10.2471M1 5.74707L5.5 1.24707"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a></div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="cs-height_60 cs-height_lg_30"></div>
                <h3 class="comment-reply-title cs-semi_bold">Leave a comment</h3>
                <div id="respond" class="comment-respond cs-box_shadow cs-white_bg">
                    <form action="#" method="post" id="commentform"
                        class="comment-form tb-comment-form cs-accent_4_bg">
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field" placeholder="Your Name">
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field" placeholder="Your Email">
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-form_field_wrap">
                            <textarea cols="30" rows="5" placeholder="Message..." class="cs-form_field"></textarea>
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <button class="cs-btn cs-style1 cs-btn_lg"><span>Post Comment</span></button>
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
            <div class="col-lg-4">
                <div class="cs-post cs-style1">
                    <a href="blog-details.html" class="cs-post_thumb">
                        <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_16.jpg"></div>
                    </a>
                    <div class="cs-post_info">
                        <h2 class="cs-post_title"><a href="blog-details.html">Guide to Making, Buying and Selling
                                NFT</a></h2>
                        <div class="cs-post_subtitle">It is a long established fact that a reader will be
                            distrac by the readable content of a page...</div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-post_avatar">
                            <a href="#" class="cs-post_avatar_img"><img src="../assets/img/avatar/avatar_18.png"
                                    alt="Avatr"></a>
                            <div class="cs-post_avatar_right">
                                <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">Marina G. Trujillo</a>
                                </h2>
                                <div class="cs-post_meta">
                                    <span class="cs-post_meta_item">5 Mar 2022</span>
                                    <span class="cs-post_meta_item">25 Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-lg-4">
                <div class="cs-post cs-style1">
                    <a href="blog-details.html" class="cs-post_thumb">
                        <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_17.jpg"></div>
                    </a>
                    <div class="cs-post_info">
                        <h2 class="cs-post_title"><a href="blog-details.html">Why do NFTs even make sense?</a></h2>
                        <div class="cs-post_subtitle">It is a long established fact that a reader will be
                            distrac by the readable content of a page...</div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-post_avatar">
                            <a href="#" class="cs-post_avatar_img"><img src="../assets/img/avatar/avatar_19.png"
                                    alt="Avatr"></a>
                            <div class="cs-post_avatar_right">
                                <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">Author</a></h2>
                                <div class="cs-post_meta">
                                    <span class="cs-post_meta_item">5 Mar 2022</span>
                                    <span class="cs-post_meta_item">25 Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-lg-4">
                <div class="cs-post cs-style1">
                    <a href="blog-details.html" class="cs-post_thumb">
                        <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_18.jpg"></div>
                    </a>
                    <div class="cs-post_info">
                        <h2 class="cs-post_title"><a href="blog-details.html">Why do NFTs even make sense?</a></h2>
                        <div class="cs-post_subtitle">It is a long established fact that a reader will be
                            distrac by the readable content of a page...</div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-post_avatar">
                            <a href="#" class="cs-post_avatar_img"><img src="../assets/img/avatar/avatar_19.png"
                                    alt="Avatr"></a>
                            <div class="cs-post_avatar_right">
                                <h2 class="cs-post_avatar_name cs-semi_bold"><a href="#">Author</a></h2>
                                <div class="cs-post_meta">
                                    <span class="cs-post_meta_item">5 Mar 2022</span>
                                    <span class="cs-post_meta_item">25 Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
        </div>
    </div>
    <div class="cs-height_65 cs-height_lg_35"></div>
@endsection
