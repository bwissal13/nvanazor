{{-- 

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Artworks</h1>
        <a href="{{ route('artworks.create') }}" class="btn btn-primary">Add Artwork</a>
        <hr>
        @foreach ($artworks as $artwork)
            <div>
                <h3>{{ $artwork->title }}</h3>
                <p>Description: {{ $artwork->description }}</p>
                <!-- Add more artwork details as needed -->
                <a href="{{ route('artworks.show', $artwork->id) }}">View</a>
                <a href="{{ route('artworks.edit', $artwork->id) }}">Edit</a>
            </div>
            <hr>
        @endforeach
    </div>
@endsection --}}
@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>

    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-sidebar_frame cs-style1">
            <div class="cs-sidebar_frame_left">
                <div class="cs-filter_sidebar">
                    <div class="cs-search_widget">
                        <form action="#" class="cs-search">
                            <input type="text" class="cs-search_input" placeholder="Search">
                            <button class="cs-search_btn">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                        stroke="currentColor" stroke-opacity="0.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-opacity="0.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="cs-filter_widget">
                        <h2 class="cs-filter_toggle_btn">
                            Catagory
                            <span class="cs-arrow_icon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.679688 0.96582L4.67969 4.96582L8.67969 0.96582" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </h2>
                        <div class="cs-filter_toggle_body">
                           
                            <form id="filterForm">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="category_0" value="0" {{ !$selectedCategory ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_0">All Categories</label>
                                </div>
                                @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="category_{{ $category->id }}" value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                    
                  
                   
                    
                </div>
            </div>
            <div class="cs-sidebar_frame_right">
                <div class="cs-filter_head">
                    <div class="cs-filter_head_left">
                        <span class="cs-search_result cs-medium cs-ternary_color">Artworks</span>
                       
                    </div>
                 
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
                <div class="row">
                    @foreach ($artworks as $artwork)
                    <div class="col-xl-3 col-lg-4 col-sm-6 artwork" data-category="{{ $artwork->category_id }}">
                        <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">
                            <span class="cs-card_like cs-primary_color">
                                <i class="fas fa-heart fa-fw"></i>
                                2.1K
                            </span>
                            <a href="#" class="cs-card_thumb cs-zoom_effect">
                                <img src={{ asset('assets/img/explore/1.jpg') }}
                                alt="Image" class="cs-zoom_item">
                            </a>
                            <div class="cs-card_info">
                                <a href="#" class="cs-avatar cs-white_bg">
                                    <img src={{ asset('assets/img/avatar/avatar_12.png')}} alt="Avatar">
                                    <span>{{$artwork->artist->name}}</span>
                                </a>
                                <h3 class="cs-card_title"><a href="#">{{$artwork->title}}</a></h3>
                                <div class="cs-card_price">{{$artwork->price}}</b>
                                </div>
                                <hr>
                                <div class="cs-card_footer">
                                    <span class="cs-card_btn_1" data-modal="#history_1">
                                        <i class="fas fa-redo fa-fw"></i>
                                        View History
                                    </span>
                                    <span class="cs-card_btn_2" data-modal="#bid_1"><span>Place Bid</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                    @endforeach

                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
               
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <script>
         function checkAll() {
        var radios = document.getElementsByName('category');
        for (var i = 0; i < radios.length; i++) {
            radios[i].checked = false;
        }
        radios[0].checked = true; // Check the "All Categories" radio button
    }

    // Check all when the page is loaded
    window.onload = checkAll;
        var selectedCategory = null; // Initialize selectedCategory variable
    
        // Listen for change event on radio buttons
        document.querySelectorAll('input[name="category"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                selectedCategory = this.value;
                filterArtworks(selectedCategory);
            });
        });
    
        // Function to filter artworks based on selected category
        function filterArtworks(categoryId) {
            var artworks = document.querySelectorAll('.artwork');
            artworks.forEach(function(artwork) {
                var artworkCategory = artwork.getAttribute('data-category');
                if (categoryId === '' || categoryId == artworkCategory) {
                    artwork.style.display = 'block';
                } else {
                    artwork.style.display = 'none';
                }
            });
        }
    </script>
@endsection
