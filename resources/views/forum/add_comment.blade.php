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
                        <a href="#" class="cs-post_avatar_img"><img src="{{asset('assets/img/avatar/avatar_18.png')}}"
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
                    <img src=" {{asset('assets/img/single-post1.jpg')}}" alt="">
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
                                    <img class="avatar" src="{{ asset('assets/img/avatar/avatar_5.png') }}" alt="Author">
                                    <a href="#" class="url">{{ $comment->user->name }}</a>
                                    {{-- @if(auth()->id() === $comment->user_id) --}}
                                        <a href="#" onclick="editComment({{ $comment->id }})">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                                <path d="M19 6h-4.82l-1.21-1.21c-.09-.09-.22-.14-.35-.14H10V4c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v.79L6.21 6H2c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1h1.38l1.42 11.34c.1.75.74 1.32 1.5 1.32h10c.76 0 1.4-.57 1.5-1.32L21.62 10H23c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1zm-5-1.97V4h-4v.03L9.83 4H14zM4 8h16l-1.19 9.56c-.04.33-.33.59-.7.59H5.89c-.37 0-.67-.26-.7-.59zm10-2h2v2h-2V6zm-4 0h2v2h-2V6z"/>
                                            </svg>edit
                                        </a>
                                    {{-- @endif --}}
                                </div>
                                <div class="comment-meta">
                                    <a href="#">{{ $comment->created_at }}</a>
                                </div>
                                <p id="comment-text-{{ $comment->id }}">{{ $comment->content }}</p>
                                <textarea id="comment-edit-{{ $comment->id }}" style="display: none;">{{ $comment->content }}</textarea>
                                <button onclick="saveComment({{ $comment->id }})" style="display: none;">Save</button>
                            </div>
                        </li>
                    @endforeach
                    
{{-- 
                        @foreach ($post->comments as $comment)
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="comment-author vcard">
                                        <img class="avatar" src="{{asset('assets/img/avatar/avatar_5.png')}}" alt="Author">
                                        <a href="#" class="url">{{ $comment->user->name }}</a>
                                        @if(auth()->id() === $comment->user_id)
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('delete-comment-{{ $comment->id }}').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                                <path d="M19 6h-4.82l-1.21-1.21c-.09-.09-.22-.14-.35-.14H10V4c0-.55-.45-1-1-1H8c-.55 0-1 .45-1 1v.79L6.21 6H2c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1h1.38l1.42 11.34c.1.75.74 1.32 1.5 1.32h10c.76 0 1.4-.57 1.5-1.32L21.62 10H23c.55 0 1-.45 1-1V7c0-.55-.45-1-1-1zm-5-1.97V4h-4v.03L9.83 4H14zM4 8h16l-1.19 9.56c-.04.33-.33.59-.7.59H5.89c-.37 0-.67-.26-.7-.59zm10-2h2v2h-2V6zm-4 0h2v2h-2V6z"/>
                                            </svg>
                                        </a>
                                        <!-- Delete comment form -->
                                        <form id="delete-comment-{{ $comment->id }}" action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#">{{ $comment->created_at }} </a>
                                    </div>
                                    <p>{{ $comment->content }}</p>

                                </div>

                            </li>
                        @endforeach --}}
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
                                data-src={{asset('assets/img/single-post1.jpg')}}></div>
                        </a>
                        <div class="cs-post_info">
                            <h2 class="cs-post_title"><a href="blog-details.html">{{ $similarPost->title }}</a></h2>
                            <div class="cs-post_subtitle">{{ $similarPost->content }}</div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-post_avatar">
                                <a href="#" class="cs-post_avatar_img"><img
                                        src={{asset('assets/img/avatar/avatar_5.png')}}
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
    <script>
        function editComment(commentId) {
    // Get the comment text element
    var commentTextElement = document.getElementById('comment-text-' + commentId);
    // Get the edit textarea element
    var commentEditElement = document.getElementById('comment-edit-' + commentId);
    // Hide the comment text and show the edit textarea
    commentTextElement.style.display = 'none';
    commentEditElement.style.display = 'block';
    // Show the save button
    document.querySelector('button[onclick="saveComment(' + commentId + ')"]').style.display = 'block';
}

    function saveComment(commentId) {
        var newText = document.getElementById('comment-edit-' + commentId).value;
        // Get the CSRF token from the meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        // Include the CSRF token in the AJAX request headers
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        });
        // Send an AJAX request to update the comment
        $.ajax({
            type: 'PUT',
            url: '/comments/' + commentId,
            data: { content: newText },
            success: function(response) {
                // Update the displayed comment text
                document.getElementById('comment-text-' + commentId).textContent = newText;
                // Toggle back to displaying the text
                document.getElementById('comment-text-' + commentId).style.display = 'block';
                document.getElementById('comment-edit-' + commentId).style.display = 'none';
                document.querySelector('button[onclick="saveComment(' + commentId + ')"]').style.display = 'none';
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                console.error(xhr.responseText);
            }
        });
    }
    
    </script>
@endsection
