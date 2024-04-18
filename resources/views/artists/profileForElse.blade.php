@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>
    <div class="cs-bg" data-src="https://thememarch.com/demo/html/enfhess-html/enfhess-dark/assets/img/page_head_bg.svg">
        <div class="cs-height_100 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-collection_card">
                <div class="cs-collection_img"><img src="../assets/img/general/collection_details.jpg"
                        alt="Collection Details"></div>
                <div class="cs-collection_bottom">
                    <div class="cs-collection_avatar"><img src="../assets/img/avatar/avatar_20.png" alt="Avatar">
                    </div>
                    <div class="cs-collection_info">
                        <div class="cs-collection_info_in cs-white_bg">
                            <div class="cs-collection_info_left">
                                <h2 class="cs-collection_avatar_name">{{ $artist->user->name }}</h2>
                                <div class="cs-collection_user">{{ $artist->user->email }}</span></div>
                                <a href="#" class="cs-btn cs-style1">
                                    <span><i class="far fa-star"></i> Favourite</span>
                                </a>
                                <span class="cs-btn cs-style1">
                                    <span>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1362_13228)">
                                                <path
                                                    d="M10.8914 11.9518C11.7635 11.9518 12.4704 11.2449 12.4704 10.3729C12.4704 9.50086 11.7635 8.79395 10.8914 8.79395C10.0194 8.79395 9.3125 9.50086 9.3125 10.3729C9.3125 11.2449 10.0194 11.9518 10.8914 11.9518Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.8914 3.93231C11.7635 3.93231 12.4704 3.22539 12.4704 2.35336C12.4704 1.48133 11.7635 0.774414 10.8914 0.774414C10.0194 0.774414 9.3125 1.48133 9.3125 2.35336C9.3125 3.22539 10.0194 3.93231 10.8914 3.93231Z"
                                                    fill="white" />
                                                <path
                                                    d="M10.8914 19.9704C11.7635 19.9704 12.4704 19.2635 12.4704 18.3914C12.4704 17.5194 11.7635 16.8125 10.8914 16.8125C10.0194 16.8125 9.3125 17.5194 9.3125 18.3914C9.3125 19.2635 10.0194 19.9704 10.8914 19.9704Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1362_13228">
                                                    <rect width="20.2105" height="20.2105" fill="white"
                                                        transform="translate(0.0546875 0.267578)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="cs-collection_right">
                                <div class="cs-collection_list_wrap">
                                    <ul class="cs-collection_list cs-white_bg cs-mp0">
                                        <li>
                                            <div class="cs-collection_list_title">Collection of</div>
                                            <div class="cs-collection_list_number">12</div>
                                        </li>
                                        <li>
                                            <div class="cs-collection_list_title">Owned by</div>
                                            <div class="cs-collection_list_number">2</div>
                                        </li>
                                        <li>
                                            <div class="cs-collection_list_title">Floor Price</div>
                                            <div class="cs-collection_list_number">0.24 ETH</div>
                                        </li>
                                        <li>
                                            <div class="cs-collection_list_title">Total Sales</div>
                                            <div class="cs-collection_list_number">0.53 ETH</div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                 
                         
                        </div>
                            <div class="artist-bio">
                                <div class="artist-bio-wh" >   <h2 class="cs-collection_avatar_name">Bio</h2>
                                <p> {{$artist->bio}}</p></div>
                             
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="category_{{ $category->id }}" value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                    
                    <div class="cs-filter_widget">
                        <h2 class="cs-filter_toggle_btn">
                            Price
                            <span class="cs-arrow_icon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.679688 0.96582L4.67969 4.96582L8.67969 0.96582" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </h2>
                        <div class="cs-filter_toggle_body">
                            <div class="cs-price_form">
                                <form class="row row-15">
                                    <div class="col-lg-12">
                                        <div class="cs-form_field_wrap cs-select_arrow">
                                            <select class="cs-form_field cs-field_sm">
                                                <option value="BTC">BTC</option>
                                                <option value="BTC">BTC</option>
                                                <option value="ETH">ETH</option>
                                                <option value="ADA">ADA</option>
                                            </select>
                                        </div>
                                        <div class="cs-height_15 cs-height_lg_15"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="cs-form_field_wrap">
                                            <input type="text" class="cs-form_field cs-field_sm" placeholder="Min">
                                        </div>
                                        <div class="cs-height_15 cs-height_lg_15"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="cs-form_field_wrap">
                                            <input type="text" class="cs-form_field cs-field_sm" placeholder="Max">
                                        </div>
                                        <div class="cs-height_10 cs-height_lg_10"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="reset" class="cs-btn cs-style1 cs-color1 cs-btn_sm"
                                            value="Clear">
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="cs-btn cs-style1 cs-btn_sm"><span>Apply</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
            <div class="cs-sidebar_frame_right">
                <div class="cs-filter_head">
                    <div class="cs-filter_head_left">
                        <span class="cs-search_result cs-medium cs-ternary_color">29064886 Results</span>
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field cs-field_sm" placeholder="In Auction">
                        </div>
                        <a href="#" class="cs-clear_btn">Clear All</a>
                    </div>
                    <div class="cs-filter_head_right">
                        <div class="cs-form_field_wrap cs-select_arrow">
                            <select class="cs-form_field cs-field_sm">
                                <option value="11">Sort By</option>
                                <option value="22">Last 7 days</option>
                                <option value="33">Last 30 days</option>
                                <option value="44">All time</option>
                            </select>
                        </div>
                        <div class="cs-form_field_wrap cs-select_arrow">
                            <select class="cs-form_field cs-field_sm">
                                <option value="1">Likes</option>
                                <option value="2">Most popular</option>
                                <option value="3">By price</option>
                                <option value="4">By published</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
                <div class="row">
                    @foreach ($artworks->artworks as $artwork)
                    <div class="col-xl-3 col-lg-4 col-sm-6 artwork" data-category="{{ $artwork->category_id }}">
                        <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">
                            <span class="cs-card_like cs-primary_color">
                                <i class="fas fa-heart fa-fw"></i>
                                2.1K
                            </span>
                            <a href="#" class="cs-card_thumb cs-zoom_effect">
                                <img src="../assets/img/explore/1.jpg" alt="Image" class="cs-zoom_item">
                            </a>
                            <div class="cs-card_info">
                                <a href="#" class="cs-avatar cs-white_bg">
                                    <img src="../assets/img/avatar/avatar_12.png" alt="Avatar">
                                    <span>{{$artist->name}}</span>
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
                <div class="text-center">
                    <a href="#" class="cs-btn cs-style1 cs-btn_lg"><span>Load More</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <script>
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
