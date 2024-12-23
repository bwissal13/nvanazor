<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from enftx-html.vercel.app/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 10:48:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---- Website Information ---->
    <title>ENFTX - NFT Dashboard HTML Template</title>
    <meta name="description"
        content="ENFTX is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc.">


    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@@dashboard">

<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper">

    <div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="header-content">
                    <div class="header-left">
                        <div class="brand-logo"><a class="mini-logo" href="index.html"><img src="images/logoi.png" alt=""
                                    width="40"></a></div>
                        <div class="search">
                            <form action="#"><span><i class="ri-search-line"></i></span><input type="text"
                                    placeholder="Search Here"></form>
                        </div>
                    </div>
                    <div class="header-right">
                        <!-- <div class="theme-switch"><i class="ri-sun-line"></i></div> -->

                        <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                            <span class="dark"><i class="ri-moon-line"></i></span>
                            <span class="light"><i class="ri-sun-line"></i></span>
                        </div>


                        <div class="nav-item dropdown notification dropdown">
                            <div data-bs-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                <div class="notify-bell icon-menu"><span><i class="ri-notification-2-line"></i></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                                <h4>Recent Notification</h4>
                                <div class="lists">
                                    <a class="" href="index.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon success"><i
                                                    class="ri-check-line"></i></span>
                                            <div>
                                                <p>Account created successfully</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon fail"><i
                                                    class="ri-close-line"></i></span>
                                            <div>
                                                <p>2FA verification failed</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon success"><i
                                                    class="ri-check-line"></i></span>
                                            <div>
                                                <p>Device confirmation completed</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index.html#">
                                        <div class="d-flex align-items-center"><span class="me-3 icon pending"><i
                                                    class="ri-question-mark"></i></span>
                                            <div>
                                                <p>xs verification pending</p><span>2020-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">More<i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown profile_log dropdown">
                            <div data-bs-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                                <div class="user icon-menu active"><span><img src="images/avatar/9.jpg" alt=""></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <div class="user-email">
                                    <div class="user">
                                        <span class="thumb">
                                            <img src="images/profile/3.png" alt="">
                                        </span>
                                        <div class="user-info">
                                            <h5>Jannatul Maowa</h5>
                                            <span>imsaifun@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="profile.html">
                                    <span><i class="ri-user-line"></i></span>Profile
                                </a>
                                <a class="dropdown-item" href="wallet.html">
                                    <span><i class="ri-wallet-line"></i></span>Wallet
                                </a>
                                <a class="dropdown-item" href="settings-profile.html">
                                    <span><i class="ri-settings-3-line"></i></span>Settings
                                </a>
                                <a class="dropdown-item" href="settings-activity.html">
                                    <span><i class="ri-time-line"></i></span>Activity
                                </a>
                                <a class="dropdown-item" href="lock.html">
                                    <span><i class="ri-lock-line"></i></span>Lock
                                </a>
                                <a class="dropdown-item logout" href="signin.html">
                                    <i class="ri-logout-circle-line"></i>Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="sidebar">
    <div class="brand-logo"><a class="full-logo" href="index.html"><img src="images/logoi.png" alt="" width="30"></a></div>
    <div class="menu">
        <ul>
            <li>
                <a href="index-2.html">
                    <span><i class="ri-layout-grid-fill"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="bids.html">
                    <span><i class="ri-briefcase-line"></i></span>
                    <span class="nav-text">Bids</span></a>
            </li>
            <li class="">
                <a href="saved.html">
                    <span><i class="ri-heart-line"></i></span>
                    <span class="nav-text">Saved</span></a>
            </li>
            <li class="">
                <a href="collection.html">
                    <span><i class="ri-star-line"></i></span>
                    <span class="nav-text">Collection</span></a>
            </li>
            <li class="">
                <a href="wallet.html">
                    <span><i class="ri-wallet-line"></i></span>
                    <span class="nav-text">Wallet</span></a>
            </li>
            <li class="">
                <a href="profile.html">
                    <span><i class="ri-account-box-line"></i></span>
                    <span class="nav-text">Profile</span></a>
            </li>
            <li class="">
                <a href="settings-profile.html">
                    <span><i class="ri-settings-3-line"></i></span>
                    <span class="nav-text">Settings</span></a>
            </li>
            <li class=" logout"><a href="signin.html">
                    <span><i class="ri-logout-circle-line"></i></span>
                    <span class="nav-text">Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Profile</h3>
                            <p class="mb-2">Welcome ENFTX Profile page</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Profile</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-12">
                    <div class="card welcome-profile">
                        <div class="card-body"><img src="images/avatar/1.jpg" alt="">
                            <h4>Welcome, Jannatul Maowa!</h4>
                            <p>Looks like you are not verified yet. Verify yourself to use the full potential of
                                Xtrader.</p>
                            <ul>
                                <li><a href="#"><span class="verified"><i class="ri-check-line"></i></span>Verify
                                        account</a></li>
                                <li><a href="#"><span class="not-verified"><i
                                                class="ri-shield-check-line"></i></span>Two-factor authentication
                                        (2FA)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Following</h4>
                        </div>
                        <div class="card-body bs-0 p-0 top-creators-content  bg-transparent">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img src="images/avatar/1.jpg"
                                                    alt="" width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Terry Camacho</h5>
                                                <p class="mb-2">60 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img src="images/avatar/2.jpg"
                                                    alt="" width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Terry Camacho</h5>
                                                <p class="mb-2">60 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img src="images/avatar/3.jpg"
                                                    alt="" width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Terry Camacho</h5>
                                                <p class="mb-2">60 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div
                                        class="d-flex justify-content-between creator-widget active  align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="top-creators-user-img me-3"><img src="images/avatar/4.jpg"
                                                    alt="" width="60"></div>
                                            <div class="top-creators-info">
                                                <h5 class="mb-0">Terry Camacho</h5>
                                                <p class="mb-2">60 Items</p>
                                            </div>
                                        </div>
                                        <div class="text-end"><a class="btn btn-secondary">Unfollow</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Bought</h4>
                        </div>
                        <div class="card-body bs-0 p-0 bg-transparent">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/1.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/1.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/2.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/2.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/3.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/3.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/4.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/4.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Collection</h4>
                        </div>
                        <div class="card-body bs-0 p-0 bg-transparent">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/5.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/5.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/6.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/6.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/7.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/7.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card items">
                                        <div class="card-body">
                                            <div class="items-img position-relative"><img src="images/items/8.jpg"
                                                    class="img-fluid rounded mb-3" alt=""><img
                                                    src="images/avatar/8.jpg" class="creator" width="50" alt=""></div>
                                            <h4 class="card-title">Liguid Wave</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/chartjs/chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs-line-init.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs-donut.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>


<!-- Mirrored from enftx-html.vercel.app/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2024 10:48:47 GMT -->
</html>