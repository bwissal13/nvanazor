@extends('layouts.front-profile')
@section('content')

           
                <div class="cs-height_30 cs-height_lg_30"></div>
                <h2 class="cs-section_heading cs-style1">My Items</h2>
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="row">
                    @foreach ($artworks as $artwork)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">
                                <span class="cs-card_like cs-primary_color">
                                    <i class="fas fa-heart fa-fw"></i>
                                    2.1K
                                </span>
                                <a href="explore-details.html" class="cs-card_thumb cs-zoom_effect">
                                    <img src="{{ asset('storage/artwork_images/' . $artwork->image_url ) }}" alt="{{ $artwork->title }}" >
                                </a>
                                <div class="cs-card_info">
                                    <a href="#" class="cs-avatar cs-white_bg">
                                        <img src={{ asset('assets/img/avatar/avatar_12.png') }}
                                        alt="Avatar">
                                        <span> {{ $artwork->artist->user->name }}</span>
                                    </a>
                                    <h3 class="cs-card_title"><a href="explore-details.html"></a>{{ $artwork->title }}
                                    </h3>
                                    <div class="cs-card_price">Price: <b class="cs-primary_color">
                                            ${{ $artwork->price }}</b>
                                    </div>
                                    <hr>
                                    <div class="cs-card_footer">
                                        <span class="cs-card_btn_1">
                                            <i class="fas fa-redo fa-fw"></i>
                                            <form action="{{ route('artworks.destroy', $artwork->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"class="cs-card_btn_2"
                                                    style="border: none ; bcolor:red"
                                                    onclick="return confirm('Are you sure you want to delete this artwork?')">Delete</button>
                                            </form>

                                        </span>
                                        <a href="#" class="cs-card_btn_2"
                                            data-artwork="{{ json_encode($artwork) }}">
                                            <span>Place Bid</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                        </div>
                    @endforeach
                </div>
           
@endsection 
