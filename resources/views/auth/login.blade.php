
@extends('front.layout')
@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>
 
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8 offset-xl-3 offset-md-2">
                <form class="cs-form_card cs-style1 cs-box_shadow cs-white_bg" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="cs-form_card_in">
                        <h2 class="cs-form_title text-center">{{ __('Sign In') }}</h2>
                
                        <div class="cs-height_30 cs-height_lg_30"></div>
                        <div class="cs-form_field_wrap">
                            <input id="email" type="email" style = "border-radius:inherit" class="cs-form_field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-form_field_wrap">
                            <input id="password" type="password" class="cs-form_field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="cs-height_15 cs-height_lg_15"></div>
                        <button type="submit" class="cs-btn cs-style1 cs-btn_lg w-100">
                            <span>{{ __('Sign In') }}</span>
                        </button>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                        <div class="cs-form_footer text-center">No Account? <a href="#">Register Now</a></div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <footer class="cs-footer cs-style1">
        <div class="cs-footer_bg"></div>
        <div class="cs-height_100 cs-height_lg_60"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <div class="cs-footer_widget">
                                <h2 class="cs-widget_title">Marketplace</h2>
                                <ul class="cs-widget_nav">
                                    <li><a href="explore-1.html">All NFTs</a></li>
                                    <li><a href="explore-2.html">Popular Art</a></li>
                                    <li><a href="explore-1.html">Digital Art</a></li>
                                    <li><a href="explore-1.html">Trending</a></li>
                                    <li><a href="explore-details.html">Explore Details</a></li>
                                    <li><a href="live-action.html">Live Action</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="cs-footer_widget">
                                <h2 class="cs-widget_title">Account</h2>
                                <ul class="cs-widget_nav">
                                    <li><a href="user-profile.html">Profile</a></li>
                                    <li><a href="user-items.html">My Collection</a></li>
                                    <li><a href="create-items.html">Create & Upload</a></li>
                                    <li><a href="user-account-settings.html">Account Setting</a></li>
                                    <li><a href="connect-wallet.html">Connect wallet</a></li>
                                    <li><a href="explore-1.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="cs-footer_widget">
                                <h2 class="cs-widget_title">Company</h2>
                                <ul class="cs-widget_nav">
                                    <li><a href="blog.html">Recent News</a></li>
                                    <li><a href="how-it-works.html">How it Works</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="faq.html">Help Center & FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="cs-footer_widget">
                        <h2 class="cs-widget_title">Subscribe to our newsletter.</h2>
                        <form class="cs-footer_newsletter">
                            <input type="text" placeholder="Enter Your Email" class="cs-newsletter_input">
                            <button class="cs-newsletter_btn">
                                <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.7014 9.03523C25.0919 8.64471 25.0919 8.01154 24.7014 7.62102L18.3374 1.25706C17.9469 0.866533 17.3137 0.866533 16.9232 1.25706C16.5327 1.64758 16.5327 2.28075 16.9232 2.67127L22.5801 8.32812L16.9232 13.985C16.5327 14.3755 16.5327 15.0087 16.9232 15.3992C17.3137 15.7897 17.9469 15.7897 18.3374 15.3992L24.7014 9.03523ZM0.806641 9.32812H23.9943V7.32812H0.806641V9.32812Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </form>
                        <div class="cs-footer_social_btns">
                            <a href="#"><i class="fab fa-facebook-f fa-fw"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-fw"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a>
                            <a href="#"><i class="fab fa-instagram fa-fw"></i></a>
                            <a href="#"><i class="fab fa-whatsapp fa-fw"></i></a>
                            <a href="#"><i class="fab fa-github fa-fw"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_60 cs-height_lg_20"></div>
        <div class="cs-footer_bottom">
            <div class="container">
                <div class="cs-footer_separetor"></div>
                <div class="cs-footer_bottom_in">
                    <div class="cs-copyright">Copyright 2022. Created by Thememarch.</div>
                    <ul class="cs-footer_menu">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-condition.html">Term & Condition</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="cs-video_popup">
        <div class="cs-video_popup_overlay"></div>
        <div class="cs-video_popup_content">
            <div class="cs-video_popup_layer"></div>
            <div class="cs-video_popup_container">
                <div class="cs-video_popup_align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="cs-video_popup_close"></div>
            </div>
        </div>
    </div>
  