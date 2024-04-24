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
                        @if($posts->isNotEmpty() && $posts->first()->topic_id)
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
                        </div>
                        @endif
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                    <div id="postsPlaceholder"></div>

                    @foreach ($posts->slice(1) as $post)
                        <div class="col-lg-6">
                            <div class="cs-post cs-style1"data-topic="{{ $post->topic_id }}">
                                <a href="http://127.0.0.1:8000/forum/post/{{$post->id}}/comment" class="cs-post_thumb">
                                    <div class="cs-post_thumb_in cs-bg" data-src="../assets/img/general/general_16.jpg">
                                    </div>
                                </a>
                                <div class="cs-post_info">
                                    <h2 class="cs-post_title"><a href="http://127.0.0.1:8000/forum/post/{{$post->id}}/comment">{{ $post->title }}</a></h2>
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
            <div class="col-lg-4">
                <div class="cs-height_0 cs-height_lg_70"></div>
                <div class="cs-blog_sidebar">

                    <div class="cs-sidebar_widget cs-box_shadow cs-white_bg">
                        <form id="searchForm" class="cs-search">
                            <input type="text" id="searchInput" class="cs-search_input" placeholder="Search">
                            <button type="submit" class="cs-btn cs-style1">
                                <span>Search</span>
                            </button>
                        </form>
                    </div>

                    <div class="cs-sidebar_widget cs-box_shadow cs-white_bg" id="topicsContainer">
                        <h2 class="cs-widget_title"><span>Forum Topics</span></h2>
                        <ul class="cs-recent_post_widget">
                            @foreach ($topics as $topic)
                                <li>
                                    <div class="cs-recent_post">
                                        <h3 class="cs-post_title"><a href="blog-details.html">{{ $topic->name }}</a></h3>
                                        <div class="cs-posted_by">{{ $topic->created_at }}</div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to update topics
            function updateTopics(topics) {
                var topicsContainer = $('#topicsContainer');
                topicsContainer.empty(); // Clear existing topics
                if (topics.length > 0) {
                    // If topics are found, append each topic to the container
                    $.each(topics, function(index, topic) {
                        var topicHTML =
                            '<li><div class="cs-recent_post"><h3 class="cs-post_title"><a href="#" class="topic-link" data-id="' +
                            topic.id + '">' + topic.name + '</a></h3><div class="cs-posted_by">' + topic
                            .created_at +
                            '</div></div></li>';
                        topicsContainer.append(topicHTML);
                    });
                } else {
                    // If no topics are found, display "No results found" message
                    topicsContainer.append('<p>No results found.</p>');
                }
            }

            // Function to filter posts by topic
            function filterPostsByTopic(topicId) {
                console.log('Selected Topic ID:', topicId); // Log the selected topic ID
                // Hide all posts
                $('.cs-post').hide();
                // Show posts with the selected topic
                var postsWithTopic = $('.cs-post[data-topic="' + topicId + '"]');
                if (postsWithTopic.length > 0) {
                    postsWithTopic.show();
                } else {
                    // If no posts are found for the selected topic, display message
                    console.log('gggg'); // Log message to verify
                    // Append message to a placeholder div within #postsContainer
                    $('#postsPlaceholder').html('<p>This topic has no posts yet.</p>');
                }
            }

            // Click event handler for topic links
            $('#topicsContainer').on('click', '.topic-link', function(e) {
                e.preventDefault();
                var topicId = $(this).data('id');
                console.log('Topic ID clicked:', topicId); // Verify if the correct topic ID is logged
                filterPostsByTopic(topicId);
            });

            // Submit event handler for search form
            $('#searchForm').submit(function(e) {
                e.preventDefault(); // Prevent form submission
                var query = $('#searchInput').val(); // Get the search query
                $.ajax({
                    type: 'GET',
                    url: '/search',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        updateTopics(response.topics); // Update topics with search results
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
