{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Artist Information</h2>
        <form method="post" action="{{ route('artists.store') }}">
            @csrf
            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea name="bio" id="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
            </div>
            <div class="form-group">
                <label for="image_url">Image URL:</label>
                <input type="text" name="image_url" id="image_url" class="form-control" value="{{ old('image_url') }}">
            </div>
            <div class="form-group">
                <label for="external_url">External URL:</label>
                <input type="text" name="external_url" id="external_url" class="form-control" value="{{ old('external_url') }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection --}}
<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <title>NFT Home Three</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    {{-- <div class="cs-preloader cs-center">
        <div class="cs-preloader_in"></div>
        <span>Loading</span>
    </div>
    <header class="cs-site_header cs-style1 cs-sticky-header cs-white_bg">
        <div class="cs-main_header">
            <div class="container-fluid">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding" href="index.html"><img
                                src="https://thememarch.com/demo/html/enfhess-html/enfhess-dark/assets/img/logo.svg"
                                alt="Logo"></a>
                    </div>
                    <div class="cs-main_header_right">
                        <div class="cs-search_wrap">
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
                        <div class="cs-nav_wrap">
                            <div class="cs-nav_out">
                                <div class="cs-nav_in">
                                    <div class="cs-nav">
                                        <ul class="cs-nav_list">
                                            <li class="menu-item-has-children">
                                                <a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home Default</a></li>
                                                    <li><a href="index_2.html">Home Style 2</a></li>
                                                    <li><a href="index_3.html">Home Style 3</a></li>
                                                    <li><a href="index_4.html">Home Style 4</a></li>
                                                    <li><a href="index_5.html">Home Style 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="explore-1.html">Explore</a>
                                                <ul>
                                                    <li><a href="explore-1.html">Explore Style 1</a></li>
                                                    <li><a href="explore-2.html">Explore Style 2</a></li>
                                                    <li><a href="explore-details.html">Explore Details</a></li>
                                                    <li><a href="live-action.html">Live Auction</a></li>
                                                    <li><a href="collection.html">Collection</a></li>
                                                    <li><a href="collection-details.html">Collection Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="how-it-works.html">How It Works</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="blog.html">Community</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="activity.html">Activity</a></li>
                                            <li class="menu-item-has-children cs-mega-menu">
                                                <a href="#">Pages</a>
                                                <ul class="cs-mega-wrapper">
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Column One</a>
                                                        <ul>
                                                            <li><a href="connect-wallet.html">Connect Wallet</a></li>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="help-center.html">Help Center</a></li>
                                                            <li><a href="help-center-browser-by-category.html">Help
                                                                    Center Catagory</a></li>
                                                            <li><a href="help-details.html">Help Center Details</a></li>
                                                            <li><a href="terms-condition.html">Terms & Conditions</a>
                                                            </li>
                                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Column Two</a>
                                                        <ul>
                                                            <li><a href="user-profile.html">Edit Profile</a></li>
                                                            <li><a href="user-account-settings.html">Profile
                                                                    Settings</a></li>
                                                            <li><a href="user-items.html">My Item</a></li>
                                                            <li><a href="create-items.html">Create Items</a></li>
                                                            <li><a href="user-activity.html">My Activity</a></li>
                                                            <li><a href="user-wallet.html">My Wallet</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="forget-password.html">Forget Password</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cs-header_btns_wrap">
                            <div class="cs-header_btns">
                                <div class="cs-header_icon_btn cs-center cs-mobile_search_toggle">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="cs-toggle_box cs-notification_box">
                                    <div class="cs-toggle_btn cs-header_icon_btn cs-center">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.63916C14 5.44569 13.5259 4.30109 12.682 3.45718C11.8381 2.61327 10.6935 2.13916 9.5 2.13916C8.30653 2.13916 7.16193 2.61327 6.31802 3.45718C5.47411 4.30109 5 5.44569 5 6.63916C5 11.8892 2.75 13.3892 2.75 13.3892H16.25C16.25 13.3892 14 11.8892 14 6.63916Z"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10.7981 16.3887C10.6663 16.616 10.477 16.8047 10.2493 16.9358C10.0216 17.067 9.76341 17.136 9.50063 17.136C9.23784 17.136 8.97967 17.067 8.75196 16.9358C8.52424 16.8047 8.33498 16.616 8.20312 16.3887"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <span class="cs-btn_badge">8</span>
                                    </div>
                                    <div class="cs-toggle_body">
                                        <h3 class="cs-notification_title">Notifications 10</h3>
                                        <ul class="cs-notification_list">
                                            <li>
                                                <a href="#" class="cs-notification_item">
                                                    <div class="cs-notification_thumb"><img
                                                            src="../assets/img/general/notificaiton_1.jpg"
                                                            alt="Image"></div>
                                                    <div class="cs-notification_right">
                                                        <p>@mark joshef purchased</p>
                                                        <h4>Digital NFT Art</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="cs-notification_item">
                                                    <div class="cs-notification_thumb"><img
                                                            src="../assets/img/general/notificaiton_2.jpg"
                                                            alt="Image"></div>
                                                    <div class="cs-notification_right">
                                                        <p>@ellen capaso commented</p>
                                                        <h4>Digital NFT Art</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="cs-notification_item">
                                                    <div class="cs-notification_thumb"><img
                                                            src="../assets/img/general/notificaiton_3.jpg"
                                                            alt="Image"></div>
                                                    <div class="cs-notification_right">
                                                        <p>@steve boone started following you.</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="cs-notification_item">
                                                    <div class="cs-notification_thumb"><img
                                                            src="../assets/img/general/notificaiton_4.jpg"
                                                            alt="Image"></div>
                                                    <div class="cs-notification_right">
                                                        <p>@mark jos just share</p>
                                                        <h4>Digital NFT Art</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="cs-notification_item">
                                                    <div class="cs-notification_thumb"><img
                                                            src="../assets/img/general/notificaiton_5.jpg"
                                                            alt="Image"></div>
                                                    <div class="cs-notification_right">
                                                        <p>@richard steger purchased</p>
                                                        <h4>Digital NFT Art</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="#" class="cs-btn cs-style1">
                                                <span>
                                                    View More
                                                    <svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.4366 7.01471C13.7295 6.72181 13.7295 6.24694 13.4366 5.95404L8.66361 1.18107C8.37072 0.888181 7.89584 0.888181 7.60295 1.18107C7.31006 1.47397 7.31006 1.94884 7.60295 2.24173L11.8456 6.48438L7.60295 10.727C7.31006 11.0199 7.31006 11.4948 7.60295 11.7877C7.89584 12.0806 8.37072 12.0806 8.66361 11.7877L13.4366 7.01471ZM0.90625 7.23438H12.9062V5.73438H0.90625V7.23438Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs-toggle_box cs-profile_box">
                                    <div class="cs-toggle_btn cs-header_icon_btn cs-center">
                                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.5 15.75V14.25C15.5 13.4544 15.1839 12.6913 14.6213 12.1287C14.0587 11.5661 13.2956 11.25 12.5 11.25H6.5C5.70435 11.25 4.94129 11.5661 4.37868 12.1287C3.81607 12.6913 3.5 13.4544 3.5 14.25V15.75"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M9.5 8.25C11.1569 8.25 12.5 6.90685 12.5 5.25C12.5 3.59315 11.1569 2.25 9.5 2.25C7.84315 2.25 6.5 3.59315 6.5 5.25C6.5 6.90685 7.84315 8.25 9.5 8.25Z"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="cs-toggle_body">
                                        <div class="cs-user_info">
                                            <h3 class="cs-user_name">Thomas G. Smith</h3>
                                            <h4 class="cs-user_balance">13.45 ETH</h4>
                                            <div class="cs-user_profile_link">
                                                <div class="cs-user_profile_link_in">
                                                    <span>1BAkZn7LrU43oK8Jv...</span>
                                                    <button>
                                                        <svg width="19" height="19" viewBox="0 0 19 19"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.35381 4.15531L4.35156 5.74756V13.6256C4.35156 14.272 4.60837 14.892 5.06549 15.3491C5.52261 15.8063 6.1426 16.0631 6.78906 16.0631H13.2511C13.1346 16.3921 12.9191 16.6769 12.634 16.8784C12.349 17.0799 12.0086 17.1881 11.6596 17.1881H6.78906C5.84423 17.1881 4.93809 16.8127 4.26999 16.1446C3.6019 15.4765 3.22656 14.5704 3.22656 13.6256V5.74756C3.22656 5.01256 3.69681 4.38631 4.35381 4.15531ZM13.5391 2.18506C13.7607 2.18506 13.9801 2.22871 14.1848 2.31351C14.3896 2.39832 14.5756 2.52262 14.7323 2.67932C14.889 2.83601 15.0133 3.02204 15.0981 3.22678C15.1829 3.43152 15.2266 3.65095 15.2266 3.87256V13.6226C15.2266 13.8442 15.1829 14.0636 15.0981 14.2683C15.0133 14.4731 14.889 14.6591 14.7323 14.8158C14.5756 14.9725 14.3896 15.0968 14.1848 15.1816C13.9801 15.2664 13.7607 15.3101 13.5391 15.3101H6.78906C6.34151 15.3101 5.91229 15.1323 5.59582 14.8158C5.27935 14.4993 5.10156 14.0701 5.10156 13.6226V3.87256C5.10156 3.42501 5.27935 2.99578 5.59582 2.67932C5.91229 2.36285 6.34151 2.18506 6.78906 2.18506H13.5391ZM13.5391 3.31006H6.78906C6.63988 3.31006 6.4968 3.36932 6.39132 3.47481C6.28583 3.5803 6.22656 3.72337 6.22656 3.87256V13.6226C6.22656 13.9331 6.47856 14.1851 6.78906 14.1851H13.5391C13.6882 14.1851 13.8313 14.1258 13.9368 14.0203C14.0423 13.9148 14.1016 13.7717 14.1016 13.6226V3.87256C14.1016 3.72337 14.0423 3.5803 13.9368 3.47481C13.8313 3.36932 13.6882 3.31006 13.5391 3.31006Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><a href="user-profile.html">My Profile</a></li>
                                            <li><a href="user-items.html">My Item</a></li>
                                            <li><a href="user-wallet.html">My Wallet</a></li>
                                            <li><a href="user-account-settings.html">Settings</a></li>
                                            <li>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="mode_switch">
                                                    <label class="form-check-label" for="mode_switch">Night
                                                        Mode</label>
                                                </div>
                                            </li>
                                            <li><a href="login.html">Logout</a></li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="create-items.html"
                                                class="cs-btn cs-style1"><span>Create</span></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="connect-wallet.html" class="cs-btn cs-style1"><span>Connect Wallet</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <div class="cs-height_90 cs-height_lg_80"></div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="cs-cover_photo cs-bg" data-src="../assets/img/cover-photo.jpg">
            <button class="cs-edit_cover cs-center">
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M29.9062 24.75H26.8125V21.6562C26.8125 21.3827 26.7039 21.1204 26.5105 20.927C26.3171 20.7336 26.0548 20.625 25.7812 20.625C25.5077 20.625 25.2454 20.7336 25.052 20.927C24.8586 21.1204 24.75 21.3827 24.75 21.6562V24.75H21.6562C21.3827 24.75 21.1204 24.8586 20.927 25.052C20.7336 25.2454 20.625 25.5077 20.625 25.7812C20.625 26.0548 20.7336 26.3171 20.927 26.5105C21.1204 26.7039 21.3827 26.8125 21.6562 26.8125H24.75V29.9062C24.75 30.1798 24.8586 30.4421 25.052 30.6355C25.2454 30.8289 25.5077 30.9375 25.7812 30.9375C26.0548 30.9375 26.3171 30.8289 26.5105 30.6355C26.7039 30.4421 26.8125 30.1798 26.8125 29.9062V26.8125H29.9062C30.1798 26.8125 30.4421 26.7039 30.6355 26.5105C30.8289 26.3171 30.9375 26.0548 30.9375 25.7812C30.9375 25.5077 30.8289 25.2454 30.6355 25.052C30.4421 24.8586 30.1798 24.75 29.9062 24.75Z"
                        fill="url(#paint0_linear_1353_5467)" />
                    <path
                        d="M17.5312 24.75H5.15625C4.88275 24.75 4.62044 24.6414 4.42705 24.448C4.23365 24.2546 4.125 23.9923 4.125 23.7188V5.15625C4.125 4.88275 4.23365 4.62044 4.42705 4.42705C4.62044 4.23365 4.88275 4.125 5.15625 4.125H23.7188C23.9923 4.125 24.2546 4.23365 24.448 4.42705C24.6414 4.62044 24.75 4.88275 24.75 5.15625V17.5312C24.75 17.8048 24.8586 18.0671 25.052 18.2605C25.2454 18.4539 25.5077 18.5625 25.7812 18.5625C26.0548 18.5625 26.3171 18.4539 26.5105 18.2605C26.7039 18.0671 26.8125 17.8048 26.8125 17.5312V5.15625C26.8125 4.33574 26.4866 3.54883 25.9064 2.96864C25.3262 2.38845 24.5393 2.0625 23.7188 2.0625H5.15625C4.33574 2.0625 3.54883 2.38845 2.96864 2.96864C2.38845 3.54883 2.0625 4.33574 2.0625 5.15625V23.7188C2.0625 24.5393 2.38845 25.3262 2.96864 25.9064C3.54883 26.4866 4.33574 26.8125 5.15625 26.8125H17.5312C17.8048 26.8125 18.0671 26.7039 18.2605 26.5105C18.4539 26.3171 18.5625 26.0548 18.5625 25.7812C18.5625 25.5077 18.4539 25.2454 18.2605 25.052C18.0671 24.8586 17.8048 24.75 17.5312 24.75Z"
                        fill="url(#paint1_linear_1353_5467)" />
                    <path
                        d="M11.3438 11.3438C12.7676 11.3438 13.9219 10.1895 13.9219 8.76562C13.9219 7.34177 12.7676 6.1875 11.3438 6.1875C9.91989 6.1875 8.76562 7.34177 8.76562 8.76562C8.76562 10.1895 9.91989 11.3438 11.3438 11.3438Z"
                        fill="url(#paint2_linear_1353_5467)" />
                    <path
                        d="M7.51781 14.7367L6.1875 16.0773V22.6876H22.6875V16.0773L18.2634 11.6429C18.1676 11.5463 18.0535 11.4696 17.9278 11.4172C17.8022 11.3648 17.6674 11.3379 17.5312 11.3379C17.3951 11.3379 17.2603 11.3648 17.1347 11.4172C17.009 11.4696 16.8949 11.5463 16.7991 11.6429L11.3438 17.1086L8.98219 14.7367C8.88632 14.64 8.77226 14.5633 8.64659 14.511C8.52093 14.4586 8.38614 14.4316 8.25 14.4316C8.11386 14.4316 7.97907 14.4586 7.85341 14.511C7.72774 14.5633 7.61368 14.64 7.51781 14.7367Z"
                        fill="url(#paint3_linear_1353_5467)" />
                    <defs>
                        <linearGradient id="paint0_linear_1353_5467" x1="20.625" y1="20.625" x2="32.9893"
                            y2="26.8849" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FC466B" />
                            <stop offset="1" stop-color="#3F5EFB" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_1353_5467" x1="2.0625" y1="2.0625" x2="31.7368"
                            y2="17.0862" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FC466B" />
                            <stop offset="1" stop-color="#3F5EFB" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_1353_5467" x1="8.76562" y1="6.1875" x2="14.9478"
                            y2="9.31744" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FC466B" />
                            <stop offset="1" stop-color="#3F5EFB" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_1353_5467" x1="6.1875" y1="11.3379" x2="22.3081"
                            y2="23.2031" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FC466B" />
                            <stop offset="1" stop-color="#3F5EFB" />
                        </linearGradient>
                    </defs>
                </svg>
            </button>
        </div>
        <div class="cs-prifile_wrap">
            <div class="cs-profile_left">
                <div class="cs-profile_sidebar cs-white_bg cs-box_shadow">
                    <div class="cs-profile_info">
                        <div class="cs-profile_pic"><img src="../assets/img/avatar/avatar_29.png" alt="">
                        </div>
                        <h3 class="cs-profile_title">Edward Figaro</h3>
                        <div class="cs-name">@omuk tomux</div>
                        <ul class="cs-profile_meta cs-mp0">
                            <li>Followers (560)</li>
                            <li>Following (56)</li>
                        </ul>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <ul class="cs-profile_nav cs-mp0">
                        <li>
                            <a href="user-profile.html" class="active">
                                <svg width="19" height="15" viewBox="0 0 19 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_1353_5399" fill="white">
                                        <path
                                            d="M7.71094 7.5C8.60604 7.5 9.46449 7.14442 10.0974 6.51149C10.7304 5.87855 11.0859 5.02011 11.0859 4.125C11.0859 3.22989 10.7304 2.37145 10.0974 1.73851C9.46449 1.10558 8.60604 0.75 7.71094 0.75C6.81583 0.75 5.95739 1.10558 5.32445 1.73851C4.69152 2.37145 4.33594 3.22989 4.33594 4.125C4.33594 5.02011 4.69152 5.87855 5.32445 6.51149C5.95739 7.14442 6.81583 7.5 7.71094 7.5ZM2.08594 14.25C2.08594 14.25 0.960938 14.25 0.960938 13.125C0.960938 12 2.08594 8.625 7.71094 8.625C13.3359 8.625 14.4609 12 14.4609 13.125C14.4609 14.25 13.3359 14.25 13.3359 14.25H2.08594ZM13.3359 2.4375C13.3359 2.28832 13.3952 2.14524 13.5007 2.03975C13.6062 1.93426 13.7493 1.875 13.8984 1.875H18.3984C18.5476 1.875 18.6907 1.93426 18.7962 2.03975C18.9017 2.14524 18.9609 2.28832 18.9609 2.4375C18.9609 2.58668 18.9017 2.72976 18.7962 2.83525C18.6907 2.94074 18.5476 3 18.3984 3H13.8984C13.7493 3 13.6062 2.94074 13.5007 2.83525C13.3952 2.72976 13.3359 2.58668 13.3359 2.4375ZM13.8984 5.25C13.7493 5.25 13.6062 5.30926 13.5007 5.41475C13.3952 5.52024 13.3359 5.66332 13.3359 5.8125C13.3359 5.96168 13.3952 6.10476 13.5007 6.21025C13.6062 6.31574 13.7493 6.375 13.8984 6.375H18.3984C18.5476 6.375 18.6907 6.31574 18.7962 6.21025C18.9017 6.10476 18.9609 5.96168 18.9609 5.8125C18.9609 5.66332 18.9017 5.52024 18.7962 5.41475C18.6907 5.30926 18.5476 5.25 18.3984 5.25H13.8984ZM16.1484 8.625C15.9993 8.625 15.8562 8.68426 15.7507 8.78975C15.6452 8.89524 15.5859 9.03832 15.5859 9.1875C15.5859 9.33668 15.6452 9.47976 15.7507 9.58525C15.8562 9.69074 15.9993 9.75 16.1484 9.75H18.3984C18.5476 9.75 18.6907 9.69074 18.7962 9.58525C18.9017 9.47976 18.9609 9.33668 18.9609 9.1875C18.9609 9.03832 18.9017 8.89524 18.7962 8.78975C18.6907 8.68426 18.5476 8.625 18.3984 8.625H16.1484ZM16.1484 12C15.9993 12 15.8562 12.0593 15.7507 12.1648C15.6452 12.2702 15.5859 12.4133 15.5859 12.5625C15.5859 12.7117 15.6452 12.8548 15.7507 12.9602C15.8562 13.0657 15.9993 13.125 16.1484 13.125H18.3984C18.5476 13.125 18.6907 13.0657 18.7962 12.9602C18.9017 12.8548 18.9609 12.7117 18.9609 12.5625C18.9609 12.4133 18.9017 12.2702 18.7962 12.1648C18.6907 12.0593 18.5476 12 18.3984 12H16.1484Z" />
                                    </mask>
                                    <path
                                        d="M7.71094 7.5V8.5V7.5ZM7.71094 0.75L7.71094 -0.25L7.71094 0.75ZM4.33594 4.125H3.33594H4.33594ZM13.8984 1.875V2.875V1.875ZM7.71094 8.5C8.87126 8.5 9.98406 8.03906 10.8045 7.21859L9.39032 5.80438C8.94492 6.24978 8.34083 6.5 7.71094 6.5V8.5ZM10.8045 7.21859C11.625 6.39812 12.0859 5.28532 12.0859 4.125H10.0859C10.0859 4.75489 9.83571 5.35898 9.39032 5.80438L10.8045 7.21859ZM12.0859 4.125C12.0859 2.96468 11.625 1.85188 10.8045 1.03141L9.39032 2.44562C9.83571 2.89102 10.0859 3.49511 10.0859 4.125H12.0859ZM10.8045 1.03141C9.98406 0.210936 8.87126 -0.25 7.71094 -0.25L7.71094 1.75C8.34083 1.75 8.94492 2.00022 9.39032 2.44562L10.8045 1.03141ZM7.71094 -0.25C6.55062 -0.25 5.43782 0.210936 4.61735 1.03141L6.03156 2.44562C6.47696 2.00022 7.08105 1.75 7.71094 1.75L7.71094 -0.25ZM4.61735 1.03141C3.79687 1.85188 3.33594 2.96468 3.33594 4.125L5.33594 4.125C5.33594 3.49511 5.58616 2.89102 6.03156 2.44562L4.61735 1.03141ZM3.33594 4.125C3.33594 5.28532 3.79687 6.39812 4.61735 7.21859L6.03156 5.80438C5.58616 5.35898 5.33594 4.75489 5.33594 4.125H3.33594ZM4.61735 7.21859C5.43782 8.03906 6.55062 8.5 7.71094 8.5L7.71094 6.5C7.08105 6.5 6.47696 6.24978 6.03156 5.80438L4.61735 7.21859ZM2.08594 14.25C2.08594 13.25 2.08642 13.25 2.0869 13.25C2.08706 13.25 2.08754 13.25 2.08785 13.25C2.08847 13.25 2.08908 13.25 2.08967 13.25C2.09086 13.25 2.09199 13.25 2.09306 13.25C2.0952 13.25 2.09713 13.2501 2.09884 13.2501C2.10225 13.2502 2.10483 13.2502 2.10662 13.2503C2.11017 13.2504 2.11076 13.2505 2.10884 13.2503C2.10467 13.25 2.09217 13.249 2.07456 13.246C2.03458 13.2394 1.99656 13.2279 1.97065 13.2149C1.94866 13.204 1.95708 13.2032 1.96877 13.2207C1.98463 13.2445 1.96094 13.2313 1.96094 13.125H-0.0390625C-0.0390625 13.5812 0.0778696 13.9899 0.304668 14.3301C0.527294 14.664 0.816969 14.8742 1.07622 15.0038C1.33156 15.1315 1.5748 15.1903 1.74576 15.2188C1.83361 15.2335 1.909 15.2412 1.96635 15.2453C1.99519 15.2473 2.01996 15.2485 2.03999 15.2492C2.05002 15.2495 2.05891 15.2497 2.06658 15.2498C2.07042 15.2499 2.07396 15.2499 2.07719 15.25C2.0788 15.25 2.08034 15.25 2.0818 15.25C2.08253 15.25 2.08323 15.25 2.08393 15.25C2.08427 15.25 2.08477 15.25 2.08495 15.25C2.08544 15.25 2.08594 15.25 2.08594 14.25ZM1.96094 13.125C1.96094 12.8193 2.14273 11.9512 2.93367 11.1602C3.6953 10.3986 5.10933 9.625 7.71094 9.625V7.625C4.68755 7.625 2.72657 8.5389 1.51946 9.74602C0.341643 10.9238 -0.0390625 12.3057 -0.0390625 13.125H1.96094ZM7.71094 9.625C10.3125 9.625 11.7266 10.3986 12.4882 11.1602C13.2791 11.9512 13.4609 12.8193 13.4609 13.125H15.4609C15.4609 12.3057 15.0802 10.9238 13.9024 9.74602C12.6953 8.5389 10.7343 7.625 7.71094 7.625V9.625ZM13.4609 13.125C13.4609 13.2313 13.4372 13.2445 13.4531 13.2207C13.4648 13.2032 13.4732 13.204 13.4512 13.2149C13.4253 13.2279 13.3873 13.2394 13.3473 13.246C13.3297 13.249 13.3172 13.25 13.313 13.2503C13.3111 13.2505 13.3117 13.2504 13.3153 13.2503C13.317 13.2502 13.3196 13.2502 13.323 13.2501C13.3247 13.2501 13.3267 13.25 13.3288 13.25C13.3299 13.25 13.331 13.25 13.3322 13.25C13.3328 13.25 13.3334 13.25 13.334 13.25C13.3343 13.25 13.3348 13.25 13.335 13.25C13.3355 13.25 13.3359 13.25 13.3359 14.25C13.3359 15.25 13.3364 15.25 13.3369 15.25C13.3371 15.25 13.3376 15.25 13.3379 15.25C13.3386 15.25 13.3393 15.25 13.3401 15.25C13.3415 15.25 13.3431 15.25 13.3447 15.25C13.3479 15.2499 13.3515 15.2499 13.3553 15.2498C13.363 15.2497 13.3719 15.2495 13.3819 15.2492C13.4019 15.2485 13.4267 15.2473 13.4555 15.2453C13.5129 15.2412 13.5883 15.2335 13.6761 15.2188C13.8471 15.1903 14.0903 15.1315 14.3457 15.0038C14.6049 14.8742 14.8946 14.664 15.1172 14.3301C15.344 13.9899 15.4609 13.5812 15.4609 13.125H13.4609ZM13.3359 13.25H2.08594V15.25H13.3359V13.25ZM14.3359 2.4375C14.3359 2.55353 14.2898 2.66481 14.2078 2.74686L12.7936 1.33265C12.5006 1.62567 12.3359 2.0231 12.3359 2.4375H14.3359ZM14.2078 2.74686C14.1257 2.82891 14.0145 2.875 13.8984 2.875L13.8984 0.875C13.484 0.875 13.0866 1.03962 12.7936 1.33265L14.2078 2.74686ZM13.8984 2.875H18.3984V0.875H13.8984V2.875ZM18.3984 2.875C18.2824 2.875 18.1711 2.82891 18.0891 2.74686L19.5033 1.33265C19.2103 1.03962 18.8128 0.875 18.3984 0.875V2.875ZM18.0891 2.74686C18.007 2.66481 17.9609 2.55353 17.9609 2.4375H19.9609C19.9609 2.0231 19.7963 1.62567 19.5033 1.33265L18.0891 2.74686ZM17.9609 2.4375C17.9609 2.32147 18.007 2.21019 18.0891 2.12814L19.5033 3.54235C19.7963 3.24933 19.9609 2.8519 19.9609 2.4375H17.9609ZM18.0891 2.12814C18.1711 2.04609 18.2824 2 18.3984 2V4C18.8128 4 19.2103 3.83538 19.5033 3.54235L18.0891 2.12814ZM18.3984 2H13.8984V4H18.3984V2ZM13.8984 2C14.0145 2 14.1257 2.04609 14.2078 2.12814L12.7936 3.54235C13.0866 3.83538 13.484 4 13.8984 4V2ZM14.2078 2.12814C14.2898 2.21019 14.3359 2.32147 14.3359 2.4375H12.3359C12.3359 2.8519 12.5006 3.24933 12.7936 3.54235L14.2078 2.12814ZM13.8984 4.25C13.484 4.25 13.0866 4.41462 12.7936 4.70765L14.2078 6.12186C14.1257 6.20391 14.0145 6.25 13.8984 6.25V4.25ZM12.7936 4.70765C12.5006 5.00067 12.3359 5.3981 12.3359 5.8125H14.3359C14.3359 5.92853 14.2898 6.03981 14.2078 6.12186L12.7936 4.70765ZM12.3359 5.8125C12.3359 6.2269 12.5006 6.62433 12.7936 6.91735L14.2078 5.50314C14.2898 5.58519 14.3359 5.69647 14.3359 5.8125H12.3359ZM12.7936 6.91735C13.0866 7.21038 13.484 7.375 13.8984 7.375V5.375C14.0145 5.375 14.1257 5.42109 14.2078 5.50314L12.7936 6.91735ZM13.8984 7.375H18.3984V5.375H13.8984V7.375ZM18.3984 7.375C18.8128 7.375 19.2103 7.21038 19.5033 6.91735L18.0891 5.50314C18.1711 5.42109 18.2824 5.375 18.3984 5.375V7.375ZM19.5033 6.91735C19.7963 6.62433 19.9609 6.2269 19.9609 5.8125H17.9609C17.9609 5.69647 18.007 5.58519 18.0891 5.50314L19.5033 6.91735ZM19.9609 5.8125C19.9609 5.3981 19.7963 5.00067 19.5033 4.70765L18.0891 6.12186C18.007 6.03981 17.9609 5.92853 17.9609 5.8125H19.9609ZM19.5033 4.70765C19.2103 4.41462 18.8128 4.25 18.3984 4.25V6.25C18.2824 6.25 18.1711 6.20391 18.0891 6.12186L19.5033 4.70765ZM18.3984 4.25H13.8984V6.25H18.3984V4.25ZM16.1484 7.625C15.734 7.625 15.3366 7.78962 15.0436 8.08265L16.4578 9.49686C16.3757 9.57891 16.2645 9.625 16.1484 9.625V7.625ZM15.0436 8.08265C14.7506 8.37567 14.5859 8.7731 14.5859 9.1875H16.5859C16.5859 9.30353 16.5398 9.41481 16.4578 9.49686L15.0436 8.08265ZM14.5859 9.1875C14.5859 9.6019 14.7506 9.99933 15.0436 10.2924L16.4578 8.87814C16.5398 8.96019 16.5859 9.07147 16.5859 9.1875H14.5859ZM15.0436 10.2924C15.3366 10.5854 15.734 10.75 16.1484 10.75V8.75C16.2645 8.75 16.3757 8.79609 16.4578 8.87814L15.0436 10.2924ZM16.1484 10.75H18.3984V8.75H16.1484V10.75ZM18.3984 10.75C18.8128 10.75 19.2103 10.5854 19.5033 10.2924L18.0891 8.87814C18.1711 8.79609 18.2824 8.75 18.3984 8.75V10.75ZM19.5033 10.2924C19.7963 9.99933 19.9609 9.6019 19.9609 9.1875H17.9609C17.9609 9.07147 18.007 8.96019 18.0891 8.87814L19.5033 10.2924ZM19.9609 9.1875C19.9609 8.7731 19.7963 8.37567 19.5033 8.08265L18.0891 9.49686C18.007 9.41481 17.9609 9.30353 17.9609 9.1875H19.9609ZM19.5033 8.08265C19.2103 7.78962 18.8128 7.625 18.3984 7.625V9.625C18.2824 9.625 18.1711 9.57891 18.0891 9.49686L19.5033 8.08265ZM18.3984 7.625H16.1484V9.625H18.3984V7.625ZM16.1484 11C15.734 11 15.3366 11.1646 15.0436 11.4576L16.4578 12.8719C16.3757 12.9539 16.2645 13 16.1484 13V11ZM15.0436 11.4576C14.7506 11.7507 14.5859 12.1481 14.5859 12.5625H16.5859C16.5859 12.6785 16.5398 12.7898 16.4578 12.8719L15.0436 11.4576ZM14.5859 12.5625C14.5859 12.9769 14.7506 13.3743 15.0436 13.6674L16.4578 12.2531C16.5398 12.3352 16.5859 12.4465 16.5859 12.5625H14.5859ZM15.0436 13.6674C15.3366 13.9604 15.734 14.125 16.1484 14.125V12.125C16.2645 12.125 16.3757 12.1711 16.4578 12.2531L15.0436 13.6674ZM16.1484 14.125H18.3984V12.125H16.1484V14.125ZM18.3984 14.125C18.8128 14.125 19.2103 13.9604 19.5033 13.6674L18.0891 12.2531C18.1711 12.1711 18.2824 12.125 18.3984 12.125V14.125ZM19.5033 13.6674C19.7963 13.3743 19.9609 12.9769 19.9609 12.5625H17.9609C17.9609 12.4465 18.007 12.3352 18.0891 12.2531L19.5033 13.6674ZM19.9609 12.5625C19.9609 12.1481 19.7963 11.7507 19.5033 11.4576L18.0891 12.8719C18.007 12.7898 17.9609 12.6785 17.9609 12.5625H19.9609ZM19.5033 11.4576C19.2103 11.1646 18.8128 11 18.3984 11V13C18.2824 13 18.1711 12.9539 18.0891 12.8719L19.5033 11.4576ZM18.3984 11H16.1484V13H18.3984V11Z"
                                        fill="currentColor" mask="url(#path-1-inside-1_1353_5399)" />
                                </svg>
                                <span>Profile Info</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-account-settings.html">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1353_5407)">
                                        <path
                                            d="M13.8984 14.625C14.5198 14.625 15.0234 14.1213 15.0234 13.5C15.0234 12.8787 14.5198 12.375 13.8984 12.375C13.2771 12.375 12.7734 12.8787 12.7734 13.5C12.7734 14.1213 13.2771 14.625 13.8984 14.625Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18.273 13.2064C17.9254 12.321 17.3256 11.5572 16.548 11.0094C15.7704 10.4617 14.8491 10.1542 13.8984 10.125C12.9477 10.1542 12.0265 10.4617 11.2489 11.0094C10.4713 11.5572 9.87152 12.321 9.52387 13.2064L9.39844 13.5L9.52387 13.7931C9.87143 14.6785 10.4712 15.4425 11.2488 15.9903C12.0264 16.5382 12.9477 16.8458 13.8984 16.875C14.8492 16.8458 15.7705 16.5382 16.5481 15.9903C17.3257 15.4425 17.9254 14.6785 18.273 13.7931L18.3984 13.5L18.273 13.2064ZM13.8984 15.75C13.4534 15.75 13.0184 15.618 12.6484 15.3708C12.2784 15.1236 11.99 14.7722 11.8197 14.361C11.6494 13.9499 11.6049 13.4975 11.6917 13.061C11.7785 12.6246 11.9928 12.2237 12.3074 11.909C12.6221 11.5943 13.023 11.38 13.4595 11.2932C13.8959 11.2064 14.3483 11.251 14.7595 11.4213C15.1706 11.5916 15.522 11.88 15.7692 12.25C16.0165 12.62 16.1484 13.055 16.1484 13.5C16.1477 14.0965 15.9104 14.6684 15.4886 15.0902C15.0668 15.512 14.4949 15.7493 13.8984 15.75V15.75Z"
                                            fill="currentColor" />
                                        <path
                                            d="M7.93538 11.6996C7.47525 11.3543 7.11101 10.8972 6.87723 10.3716C6.64344 9.84603 6.54788 9.2694 6.59961 8.69649C6.65135 8.12357 6.84865 7.57339 7.17281 7.09817C7.49696 6.62296 7.93719 6.23848 8.45172 5.98125C8.96624 5.72401 9.53798 5.60256 10.1126 5.62841C10.6873 5.65427 11.2458 5.82658 11.7352 6.12898C12.2245 6.43138 12.6284 6.85384 12.9086 7.35625C13.1888 7.85866 13.3359 8.42433 13.3359 8.99958H12.2109C12.2109 8.61605 12.1129 8.23889 11.9261 7.90391C11.7394 7.56893 11.4701 7.28725 11.1438 7.08561C10.8176 6.88398 10.4452 6.76909 10.0621 6.75185C9.67893 6.73461 9.29774 6.8156 8.95471 6.98712C8.61167 7.15864 8.31817 7.41499 8.10208 7.73185C7.88598 8.0487 7.75447 8.41554 7.72003 8.79752C7.68559 9.17949 7.74936 9.56393 7.90528 9.91433C8.06121 10.2647 8.30412 10.5695 8.61094 10.7996L7.93538 11.6996Z"
                                            fill="currentColor" />
                                        <path
                                            d="M17.4467 6.21225L16.1192 3.91275C15.9893 3.68719 15.7852 3.51369 15.5417 3.42188C15.2981 3.33006 15.0303 3.32562 14.7838 3.40931L13.4147 3.87281C13.1788 3.71376 12.9322 3.57112 12.6767 3.44587L12.3932 2.0295C12.3422 1.77447 12.2044 1.54498 12.0033 1.38007C11.8022 1.21516 11.5502 1.12503 11.2901 1.125H8.63512C8.37504 1.12503 8.12301 1.21516 7.9219 1.38007C7.72079 1.54498 7.58303 1.77447 7.53206 2.0295L7.24856 3.44587C6.9902 3.56974 6.74078 3.71146 6.50212 3.87L5.14087 3.40931C4.89456 3.32591 4.62696 3.33051 4.38367 3.42231C4.14037 3.51411 3.93644 3.68743 3.80662 3.91275L2.47912 6.21225C2.34907 6.43741 2.30104 6.70067 2.34319 6.95725C2.38534 7.21384 2.51506 7.44789 2.7103 7.61962L3.79649 8.57419C3.78693 8.71594 3.77512 8.85656 3.77512 9C3.77512 9.14512 3.78074 9.28856 3.79087 9.43088L2.71087 10.3804C2.51544 10.552 2.3855 10.7859 2.34315 11.0425C2.30079 11.2991 2.34864 11.5625 2.47855 11.7877L3.80605 14.0873C3.936 14.3127 4.14016 14.4861 4.3837 14.5778C4.62723 14.6695 4.89504 14.6739 5.14143 14.5901L6.51056 14.1272C6.74644 14.2861 6.99303 14.4286 7.24856 14.5536L7.53149 15.9705C7.58249 16.2256 7.72033 16.4552 7.92156 16.6201C8.12278 16.785 8.37495 16.8751 8.63512 16.875H9.40012V15.75H8.63512L8.23574 13.7531C7.68327 13.5479 7.17041 13.2487 6.71981 12.8689L4.78087 13.5248L3.45337 11.2252L4.98618 9.87806C4.88131 9.29637 4.87998 8.70072 4.98224 8.11856L3.45337 6.77419L4.78087 4.47525L6.70856 5.12775C7.16238 4.74735 7.67923 4.44923 8.23574 4.24688L8.63512 2.25H11.2901L11.6895 4.24688C12.242 4.45214 12.7548 4.75128 13.2054 5.13112L15.1444 4.47525L16.4719 6.77475L14.898 8.154L15.6394 9L17.2144 7.61962C17.4098 7.44804 17.5397 7.21405 17.5821 6.95746C17.6244 6.70087 17.5766 6.43754 17.4467 6.21225V6.21225Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1353_5407">
                                            <rect width="18" height="18" fill="white"
                                                transform="translate(0.960938)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-items.html">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.38131 0.70537L2.38131 0.70537C2.04217 0.755423 1.70925 0.924566 1.46165 1.17434M2.38131 0.70537L3.00218 0.76427C3.80487 1.00589 4.29426 1.8583 4.0934 2.62948C3.94828 3.18661 3.54444 3.61082 3.01305 3.77244C2.90023 3.80675 2.74286 3.82714 2.57777 3.82849C2.41256 3.82984 2.25598 3.81199 2.14463 3.77971L2.14462 3.77971C1.33629 3.54545 0.840391 2.69029 1.04295 1.91219L1.04295 1.91218C1.12107 1.61203 1.24656 1.39132 1.46165 1.17434M2.38131 0.70537C2.436 0.697298 2.54785 0.697908 2.67873 0.709974M2.38131 0.70537L2.67873 0.709974M1.46165 1.17434L1.31962 1.03354L1.46165 1.17434ZM2.67873 0.709974C2.80741 0.721837 2.92959 0.742442 3.00214 0.76426L2.67873 0.709974ZM6.31849 3.1635L6.31848 3.16349C6.22718 3.12069 6.08772 3.02333 6.02209 2.9577C5.51737 2.45299 5.71788 1.57987 6.38776 1.34838C6.40599 1.34208 6.43869 1.33193 6.57421 1.32347C6.71028 1.31498 6.93533 1.30884 7.33101 1.30454C8.12067 1.29595 9.57331 1.29476 12.3134 1.29422C12.6721 1.29415 13.0094 1.29404 13.3266 1.29393C15.8468 1.2931 17.1011 1.29268 17.7552 1.3159C18.1288 1.32917 18.2835 1.34995 18.3621 1.37373C18.4054 1.38683 18.4141 1.39396 18.451 1.4242C18.4668 1.43712 18.4877 1.45426 18.5187 1.47789C18.6689 1.5925 18.7645 1.70482 18.8245 1.82764C18.8847 1.95079 18.9161 2.09856 18.9166 2.2944C18.9169 2.39632 18.9123 2.44941 18.9011 2.49661C18.8897 2.54459 18.8687 2.59735 18.8206 2.69504L18.8206 2.69505C18.7072 2.92558 18.5792 3.05086 18.3354 3.16519L18.1771 3.23944H12.3288H6.48048L6.31849 3.1635ZM5.7421 7.00616V7.00612C5.7434 6.55642 5.99594 6.21194 6.43987 6.06842C6.44463 6.06794 6.45131 6.06736 6.46023 6.0667C6.48515 6.06487 6.52098 6.06297 6.56804 6.06106C6.66177 6.05727 6.79407 6.05369 6.96023 6.05036C7.29222 6.0437 7.75523 6.03808 8.30619 6.03354C9.40788 6.02446 10.8588 6.01969 12.3112 6.01931C13.7636 6.01894 15.2169 6.02296 16.3235 6.03147C16.8768 6.03572 17.3429 6.04109 17.6785 6.04758C17.8465 6.05083 17.9808 6.05434 18.0767 6.05808C18.1249 6.05996 18.1619 6.06185 18.1882 6.0637C18.2042 6.06482 18.2125 6.06572 18.2155 6.06601C19.0424 6.29322 19.1907 7.41168 18.425 7.86083C18.3889 7.88196 18.3722 7.89171 18.3508 7.90052C18.3309 7.9087 18.3015 7.91812 18.2478 7.92724C18.1346 7.94647 17.9378 7.96077 17.5452 7.96985C16.7733 7.98768 15.2921 7.98487 12.3193 7.97922L12.2217 7.97903L6.48067 7.96815L6.32217 7.89382C6.32217 7.89382 6.32217 7.89382 6.32217 7.89382C6.07853 7.77954 5.95039 7.6541 5.83743 7.42462L5.83742 7.42459C5.78809 7.3244 5.76788 7.27349 5.75693 7.22552C5.74589 7.17719 5.74175 7.12097 5.7421 7.00616ZM6.43149 6.06944C6.4315 6.06943 6.43211 6.06933 6.43343 6.06915L6.43149 6.06944ZM1.0408 6.64919L0.873099 6.60551L1.0408 6.64919C1.21137 5.99432 1.72001 5.53902 2.37557 5.44796C2.843 5.38307 3.32012 5.54759 3.67243 5.90297C4.29248 6.52846 4.29248 7.47919 3.67243 8.10468C3.14034 8.64144 2.32654 8.72361 1.69849 8.30423C1.15475 7.94114 0.88475 7.24826 1.0408 6.64919ZM1.04295 12.0955L1.04295 12.0955C0.84375 11.3303 1.31278 10.4956 2.10922 10.2377C2.21774 10.2026 2.38073 10.1813 2.55598 10.1807C2.73083 10.1801 2.89766 10.2001 3.01305 10.2352C3.81186 10.4782 4.29166 11.318 4.09169 12.0961C4.01621 12.3898 3.88922 12.6154 3.67785 12.8315L3.67784 12.8315C3.37213 13.1442 3.0061 13.2986 2.56643 13.3C2.13978 13.3013 1.77351 13.1479 1.46165 12.8333C1.24656 12.6163 1.12107 12.3956 1.04295 12.0955ZM5.81755 12.1185L5.63603 12.2024L5.81755 12.1185C5.71064 11.8874 5.71069 11.5774 5.81799 11.3454C5.94647 11.0677 6.19981 10.8567 6.47919 10.7864C6.48339 10.7861 6.4891 10.7858 6.49653 10.7855C6.5182 10.7845 6.54961 10.7835 6.591 10.7824C6.67352 10.7804 6.79172 10.7785 6.94271 10.7767C7.24447 10.7731 7.67461 10.7701 8.20655 10.7677C9.2703 10.763 10.7397 10.761 12.4002 10.7626L18.177 10.7682L18.3354 10.8425C18.5792 10.9568 18.7072 11.0821 18.8206 11.3126L18.8206 11.3126C18.8687 11.4103 18.8897 11.4631 18.9011 11.511C18.9123 11.5582 18.9169 11.6113 18.9166 11.7132C18.9161 11.9093 18.8847 12.057 18.8245 12.1801C18.7644 12.3029 18.6687 12.4154 18.5179 12.5304C18.4869 12.554 18.466 12.5711 18.4502 12.5841C18.4132 12.6144 18.4044 12.6216 18.3608 12.6347C18.2814 12.6585 18.1251 12.6792 17.748 12.692C17.0877 12.7144 15.821 12.7122 13.2759 12.7078C12.9564 12.7072 12.6168 12.7067 12.2558 12.7061L6.44671 12.6968L6.28547 12.6176C6.08697 12.5201 5.92618 12.3533 5.81755 12.1185Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                </svg>
                                <span>My Items</span>
                            </a>
                        </li>
                        <li>
                            <a href="create-items.html">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.78584 0.0448285C2.09536 0.1964 1.46714 0.71104 1.1632 1.37411C0.946809 1.84613 0.949655 1.78737 0.961261 5.54923C0.972977 9.35855 0.95586 9.08329 1.21371 9.60461C1.4947 10.1726 2.06514 10.6366 2.70464 10.8171C2.9272 10.88 3.15618 10.8841 6.40906 10.8841H9.87625L10.15 10.799C10.5507 10.6744 10.8646 10.4857 11.1566 10.1937C11.4486 9.90162 11.6374 9.58775 11.762 9.18701L11.8471 8.91329V5.44609C11.8471 1.57214 11.8604 1.78529 11.5867 1.26324C11.289 0.695383 10.8057 0.296108 10.15 0.076179C9.96114 0.0128571 9.74399 0.00844101 6.48205 0.00168911C3.65202 -0.00411388 2.97278 0.00380617 2.78584 0.0448285ZM13.8318 2.42759C13.6896 2.50183 13.6066 2.578 13.5265 2.70756L13.4164 2.88555L13.3982 6.73884L13.3799 10.5921L13.2988 10.8294C13.0606 11.5257 12.4887 12.0976 11.7923 12.3358L11.5551 12.417L7.70469 12.4352L3.85429 12.4535L3.68191 12.5548C3.37775 12.7336 3.2299 13.1037 3.32359 13.4516C3.3807 13.6636 3.62118 13.903 3.83724 13.9628C3.96327 13.9978 4.86981 14.0055 7.83243 13.9967L11.6646 13.9853L12.0214 13.8873C13.4327 13.4998 14.4628 12.4702 14.8497 11.0606L14.9482 10.7016L14.9596 6.86947C14.9684 3.90684 14.9607 3.0003 14.9258 2.87428C14.8685 2.6676 14.638 2.43142 14.4341 2.37051C14.2027 2.30135 14.0447 2.31635 13.8318 2.42759ZM6.60172 3.13494C6.83556 3.19381 7.09199 3.45023 7.15085 3.68407C7.17443 3.77768 7.19374 4.03589 7.19374 4.25787V4.66141L7.65907 4.66222C8.19156 4.66313 8.33981 4.70802 8.53145 4.92627C8.86036 5.30087 8.76025 5.87624 8.32353 6.12128C8.17743 6.20325 8.11207 6.2138 7.68082 6.22515L7.20075 6.23778L7.18812 6.71786C7.17677 7.1491 7.16622 7.21447 7.08425 7.36057C6.94709 7.60502 6.73333 7.73871 6.45092 7.7567C6.19132 7.77324 6.00971 7.70349 5.83617 7.52064C5.66212 7.33725 5.62438 7.18889 5.62438 6.68815V6.23077H5.22083C4.67663 6.23077 4.51831 6.18661 4.30772 5.97599C3.92348 5.59175 4.01615 4.99711 4.49769 4.75714C4.67492 4.66882 4.72597 4.66141 5.15707 4.66141H5.62438V4.19411C5.62438 3.76301 5.63179 3.71195 5.72011 3.53472C5.82248 3.32928 6.00796 3.17735 6.21694 3.12778C6.38877 3.08702 6.41333 3.08749 6.60172 3.13494Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Create</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-activity.html">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.7475 15.0002H10.59C10.2726 14.9687 9.97344 14.8368 9.73606 14.6237C9.49869 14.4106 9.33543 14.1274 9.27 13.8152L7.26 4.50017L5.19 9.30017C5.13145 9.43433 5.03492 9.54842 4.91231 9.62838C4.7897 9.70834 4.64638 9.75068 4.5 9.75017H2.25C2.05109 9.75017 1.86032 9.67115 1.71967 9.5305C1.57902 9.38985 1.5 9.19908 1.5 9.00017C1.5 8.80126 1.57902 8.61049 1.71967 8.46984C1.86032 8.32919 2.05109 8.25017 2.25 8.25017H4.005L5.8875 3.90767C6.01422 3.61627 6.23021 3.37263 6.50433 3.2119C6.77845 3.05117 7.09653 2.98164 7.41271 3.01334C7.72889 3.04505 8.02683 3.17634 8.26358 3.38829C8.50033 3.60025 8.66365 3.88191 8.73 4.19267L10.74 13.5002L12.81 8.71517C12.8663 8.57821 12.9618 8.46096 13.0846 8.37821C13.2074 8.29546 13.3519 8.25091 13.5 8.25017H15.75C15.9489 8.25017 16.1397 8.32919 16.2803 8.46984C16.421 8.61049 16.5 8.80126 16.5 9.00017C16.5 9.19908 16.421 9.38985 16.2803 9.5305C16.1397 9.67115 15.9489 9.75017 15.75 9.75017H13.995L12.1125 14.0927C11.9975 14.3601 11.8073 14.5882 11.5649 14.7494C11.3225 14.9105 11.0385 14.9976 10.7475 15.0002Z"
                                        fill="currentColor" />
                                </svg>
                                <span>My Activity</span>
                            </a>
                        </li>
                        <li>
                            <a href="user-wallet.html">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.3359 9.5625H14.4609V10.6875H13.3359V9.5625Z" fill="currentColor" />
                                    <path
                                        d="M16.7109 4.5H3.21094V2.8125H15.5859V1.6875H3.21094C2.91257 1.6875 2.62642 1.80603 2.41544 2.017C2.20446 2.22798 2.08594 2.51413 2.08594 2.8125V14.625C2.08594 14.9234 2.20446 15.2095 2.41544 15.4205C2.62642 15.6315 2.91257 15.75 3.21094 15.75H16.7109C17.0093 15.75 17.2955 15.6315 17.5064 15.4205C17.7174 15.2095 17.8359 14.9234 17.8359 14.625V5.625C17.8359 5.32663 17.7174 5.04048 17.5064 4.8295C17.2955 4.61853 17.0093 4.5 16.7109 4.5ZM3.21094 14.625V5.625H16.7109V7.3125H12.2109C11.9126 7.3125 11.6264 7.43103 11.4154 7.642C11.2045 7.85298 11.0859 8.13913 11.0859 8.4375V11.8125C11.0859 12.1109 11.2045 12.397 11.4154 12.608C11.6264 12.819 11.9126 12.9375 12.2109 12.9375H16.7109V14.625H3.21094ZM16.7109 8.4375V11.8125H12.2109V8.4375H16.7109Z"
                                        fill="currentColor" />
                                </svg>
                                <span>My Wallet</span>
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.7109 6L12.6534 7.0575L13.8384 8.25H7.71094V9.75H13.8384L12.6534 10.935L13.7109 12L16.7109 9L13.7109 6ZM4.71094 3.75H9.96094V2.25H4.71094C3.88594 2.25 3.21094 2.925 3.21094 3.75V14.25C3.21094 15.075 3.88594 15.75 4.71094 15.75H9.96094V14.25H4.71094V3.75Z"
                                        fill="currentColor" />
                                </svg>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cs-profile_right">
                <div class="cs-height_30 cs-height_lg_30"></div>
                <h2 class="cs-section_heading cs-style1">Profile Info</h2>
                <div class="cs-height_25 cs-height_lg_25"></div>
                {{-- <form class="row">
                    <div class="col-lg-6">
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field cs-white_bg"
                                placeholder="e. g. ‘Edward Figaro’">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field cs-white_bg"
                                placeholder="e. g. ‘Edward Figaro’">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <textarea cols="30" rows="5" placeholder="Your bio..." class="cs-form_field cs-white_bg"></textarea>
                        </div>
                        <div class="cs-height_20 cs-height_lg_20"></div>
                        <div class="cs-edit_profile">
                            <div class="cs-edit_profile_img"><img src="../assets/img/avatar/avatar_29.png"
                                    alt=""></div>
                            <div class="cs-edit_profile_right">
                                <div class="cs-edit_profile_btns">
                                    <a href="#" class="cs-upload_btn">Upload</a>
                                    <span class="cs-delete_btn"><i class="far fa-trash-alt"></i> Delete</span>
                                </div>
                                <p>Images must be .png or .jpg format. Min size 200x200px (avatar)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-height_0 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field cs-white_bg" placeholder="Username">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" class="cs-form_field cs-white_bg" placeholder="Custom Url">
                        </div>
               
                    </div>
                    <div class="col-lg-12">
                        <div class="cs-height_40 cs-height_lg_5"></div>
                        <button class="cs-btn cs-style1 cs-btn_lg"><span>Update Profile</span></button>
                    </div>
                </form> --}}
                {{-- <form method="post" action="{{ route('artists.store') }}" class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="cs-form_field_wrap">
                            <textarea name="bio" class="cs-form_field cs-white_bg" placeholder="Your bio..." rows="5"></textarea>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="image_url" class="cs-form_field cs-white_bg" placeholder="Image URL">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="external_url" class="cs-form_field cs-white_bg" placeholder="External URL">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-height_0 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="username" class="cs-form_field cs-white_bg" placeholder="Username" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="email" name="email" class="cs-form_field cs-white_bg" placeholder="Email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cs-height_40 cs-height_lg_5"></div>
                        <button type="submit" class="cs-btn cs-style1 cs-btn_lg"><span>Save</span></button>
                    </div>
                </form> --}}
                {{-- <form method="post" action="{{ route('artists.store') }}" class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="cs-form_field_wrap">
                            <textarea name="bio" class="cs-form_field cs-white_bg" placeholder="Your bio..." rows="5">{{ $artist->bio ?? old('bio') }}</textarea>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="image_url" class="cs-form_field cs-white_bg"
                                placeholder="Image URL" value="{{ $artist->image_url ?? old('image_url') }}">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="external_url" class="cs-form_field cs-white_bg"
                                placeholder="External URL" value="{{ $artist->external_url ?? old('external_url') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-height_0 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="username" class="cs-form_field cs-white_bg"
                                placeholder="Username" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="email" name="email" class="cs-form_field cs-white_bg"
                                placeholder="Email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cs-height_40 cs-height_lg_5"></div>
                        <button type="submit" class="cs-btn cs-style1 cs-btn_lg"><span>Save</span></button>
                    </div>
                </form> --}}
                <form method="post" action="{{ route('artists.store') }}" class="row">
                    @csrf
                    <div class="col-lg-6">
                        <div class="cs-form_field_wrap">
                            <textarea name="bio" class="cs-form_field cs-white_bg" placeholder="Your bio..." rows="5">{{ $artist->bio ?? old('bio') }}</textarea>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="image_url" class="cs-form_field cs-white_bg" placeholder="Image URL" value="{{ $artist->image_url ?? old('image_url') }}">
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="external_url" class="cs-form_field cs-white_bg" placeholder="External URL" value="{{ $artist->external_url ?? old('external_url') }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-height_0 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="text" name="username" class="cs-form_field cs-white_bg" placeholder="Username" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-form_field_wrap">
                            <input type="email" name="email" class="cs-form_field cs-white_bg" placeholder="Email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cs-height_40 cs-height_lg_5"></div>
                        <button type="submit" class="cs-btn cs-style1 cs-btn_lg"><span>Save</span></button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <div class="cs-height_100 cs-height_lg_70"></div>
    {{-- <footer class="cs-footer cs-style1">
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
    </footer> --}}
    {{-- <div class="cs-video_popup">
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
    </div> --}}
    <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from thememarch.com/demo/html/enfhess-html/enfhess-dark/light-mode/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 10:21:31 GMT -->

</html>
