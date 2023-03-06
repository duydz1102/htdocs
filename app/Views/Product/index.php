<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cửa hàng điện thoại scamer</title>
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/public/css/Style_user.css"/>

</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler f_s_2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse d-block flex-column" id="navbarSupportedContent">
            <div class="offcanvas-header">
                <h3 class="mt-auto mb-auto offcanvas-title">
                    <div class="fa-fw d-inline-block me-1">
                        <img src="https://static.swappa.com/static/images/logos/swappa_logo_ffffff.svg" alt=""/>
                    </div>
                    Save with Swappa
                </h3>
                <button class="btn-close text-reset mt-auto mb-auto ml-3"></button>
            </div>
            <div class="offcanvas-body mt-3">
                <div class="row row-cols-2 mb-3">
                    <div class="col-6">
                        <a href="./login.html" class="btn btn-login d-block">Login</a>
                    </div>
                    <div class="col-6">
                        <a href="register.html" class="btn btn-login btn-register d-block">Register</a>
                    </div>
                    <div class="col-6 w-100 mt-3">

                        <div class="side-menu-modal w-100">
                            <a href="#">
                                <i class='bx bx-search'></i> Search
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-help-circle'></i> Help
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-dollar-circle'></i> Sell
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-candles'></i> Trade-In
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-store-alt'></i> Cart
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-location-plus'></i> Local
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <h4 class="mt-3">Shop</h4>
                        <div class="side-menu-modal">
                            <a href="#iphone-items">
                                <i class='bx bxl-apple'></i> iPhones
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#">
                                <i class='bx bx-mobile-alt'></i> Phones
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#laptop-items">
                                <i class='bx bx-laptop'></i> Laptop and MacBooks
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#laptop-items">
                                <i class='bx bx-laptop'></i> Computer
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#watch-items">
                                <i class='bx bxs-watch-alt'></i> Watches and Wearables
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                        <div class="side-menu-modal">
                            <a href="#ipad-items">
                                <i class='bx bxs-devices'></i> Tablets and iPads
                                <span class="float-end">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                  </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="navbar-brand" href="#">
            <img class="logo-main" src="/public/img/img_user/LogoMain.svg" alt=""/>
        </a>
        <div>
            <button class="btn  tm-search-btn log_in" type="submit">
                <i class='bx bx-universal-access'></i>
            </button>
            <button class="btn  tm-search-btn shopping" type="submit">
                <i class='bx bxs-shopping-bag-alt'></i>
            </button>
            <button class="btn  tm-search-btn search_card" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</nav>
<section class="section-body">
    <div class="list-hedder hide_navbar" id="list-head">
        <ul class="d-flex justify-content-center">
            <li>
                <a href="#">Iphone<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">Unlocked</a>
                    </li>
                    <li>
                        <a href="#">IphoneXr</a>
                    </li>
                    <li>
                        <a href="#">Iphone11</a>
                    </li>
                    <li>
                        <a href="#">Iphone12</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Phone<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">Apple</a>
                    </li>
                    <li>
                        <a href="#">samsung</a>
                    </li>
                    <li>
                        <a href="#">google</a>
                    </li>
                    <li>
                        <a href="#">tmobile</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Laptop<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">macbooks</a>
                    </li>
                    <li>
                        <a href="#">macbook pro</a>
                    </li>
                    <li>
                        <a href="#">macbook air</a>
                    </li>
                    <li>
                        <a href="#">window</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Computer<i class='bx bxs-down-arrow' id="none-icon" id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">laptop</a>
                    </li>
                    <li>
                        <a href="#">macbooks</a>
                    </li>
                    <li>
                        <a href="#">imac</a>
                    </li>
                    <li>
                        <a href="#">window</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Watches<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">apple watch</a>
                    </li>
                    <li>
                        <a href="#">samsung watch</a>
                    </li>
                    <li>
                        <a href="#">android watch</a>
                    </li>
                    <li>
                        <a href="#">see more</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Tablets<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">ipad</a>
                    </li>
                    <li>
                        <a href="#">samsung</a>
                    </li>
                    <li>
                        <a href="#">window</a>
                    </li>
                    <li>
                        <a href="#">amazon</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Video Games<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">playstation 5</a>
                    </li>
                    <li>
                        <a href="#">playstation 3</a>
                    </li>
                    <li>
                        <a href="#">playstation 4</a>
                    </li>
                    <li>
                        <a href="#">playstation 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Home Tech<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">Unlocked</a>
                    </li>
                    <li>
                        <a href="#">IphoneXr</a>
                    </li>
                    <li>
                        <a href="#">Iphone11</a>
                    </li>
                    <li>
                        <a href="#">Iphone12</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Cameras<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">amazon</a>
                    </li>
                    <li>
                        <a href="#">google home</a>
                    </li>
                    <li>
                        <a href="#">nest</a>
                    </li>
                    <li>
                        <a href="#">santos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Sell<i class='bx bxs-down-arrow' id="none-icon"></i></a>
                <ul class="sub-nav hovered">
                    <li>
                        <a href="#">iphone</a>
                    </li>
                    <li>
                        <a href="#">macbooks</a>
                    </li>
                    <li>
                        <a href="#">android</a>
                    </li>
                    <li>
                        <a href="#">laptop</a>
                    </li>
                </ul>
            </li>
        </ul>
        
    </div>
    <hr width="100%" class="line-header" size="5px"/>

    <h1 class="mt-4 text-center">
        Welcome to the safest marketplace for new
    </h1>

    <div class="container container-content">
        <div class="row tm-mb-90 tm-gallery justify-content-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4 justify-content-around">
                <div class="col car_custom">
                    <h2 class="title-card h3 my-3 text-center color-orange">
                        No Junk, No Jerks
                    </h2>
                    <div class="card-healll">
                        <figure class="tm-video-item bg-main">
                            <img src="/public/img/img_user/iphone-head.jpeg" alt="Image" class="img-fluid" width="200px"
                                 height="200px"/>
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <a class="d-block h3 stretched-link cl-main h3-title">iPhones</a>
                        <div class="d-flex justify-content-around fs-sm">
                <span><i class="far fa-list-check color-blue">
                    7385 approved listings
                  </i></span>
                            <span><i class="far fa-list-check color-blue">
                    889 legit sellers
                  </i></span>
                        </div>
                    </div>
                </div>
                <div class="col car_custom">
                    <h2 class="title-card h3 my-3 text-center color-orange">
                        Free Shipping
                    </h2>
                    <div class="card-healll">
                        <figure class="tm-video-item bgg-green-100">
                            <img src="/public/img/img_user/category_phones_600x600.png" alt="Image" class="img-fluid" width="200px"
                                 height="200px"/>
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <a class="d-block h3 stretched-link cl-main h3-title">Phones</a>
                        <div class="d-flex justify-content-around fs-sm">
                <span><i class="far fa-list-check color-blue">
                    7385 approved listings
                  </i></span>
                            <span><i class="far fa-list-check color-blue">
                    889 legit sellers
                  </i></span>
                        </div>
                    </div>
                </div>
                <div class="col car_custom">
                    <h2 class="title-card h3 my-3 text-center color-orange">
                        24/7/365 Support
                    </h2>
                    <div class="card-healll">
                        <figure class="tm-video-item bgg-pink-100">
                            <img src="/public/img/img_user/macbook-head.jpeg" alt="Image" class="img-fluid" width="200px"
                                 height="200px"/>
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <a href="photo-detail.html">View more</a>
                            </figcaption>
                        </figure>
                        <a class="d-block h3 stretched-link cl-main h3-title">MacBooks + Laptops</a>
                        <div class="d-flex justify-content-around fs-sm">
                <span><i class="far fa-list-check color-blue">
                    7385 approved listings
                  </i></span>
                            <span><i class="far fa-list-check color-blue">
                    889 legit sellers
                  </i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-4">
                <h2 class="text-center">Shop Phones by Carrier</h2>
            </div>
            <div class="row row-cols-2 row-cols-md-5 row-cols-xl-6 justify-content-center carrier_pics">
                <div class="col-3 hover-banner">
                    <a class="btn btn-default d-block">
                        <img src="/public/img/img_user/unlocked_btn.svg" alt=""/>
                    </a>
                </div>
                <div class="col-3  hover-banner">
                    <a class="btn btn-default d-block">
                        <img src="/public/img/img_user/att_btn.svg" alt=""/>
                    </a>
                </div>
                <div class="col-3  hover-banner">
                    <a class="btn btn-default d-block">
                        <img src="/public/img/img_user/tmobile.svg" alt=""/>
                    </a>
                </div>
                <div class="col-3  hover-banner">
                    <a class="btn btn-default d-block">
                        <img src="/public/img/img_user/verizon_btn.svg" alt=""/>
                    </a>
                </div>
            </div>
            
            <section id="section_billboard" class="mb-5">
                <div class="sell_search_block card mb-4 p-3 rounded text-center">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 justify-content-center align-items-center">
                        <div class="col">
                            <h3 class="d-block my-2 text-light">
                                Get more green, get paid fast
                            </h3>
                        </div>
                        <div class="col">
                            <a href="#" class="stetched-link btn btn-outline-light d-block mx-5">
                                Swappa Trade-In
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                        class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 justify-content-center gy-4">
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_computers_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Computer</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_hometech_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Watches</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_wearables_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">iPads + Tablets</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_gaming_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Video Games</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_tablets_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Home Tech</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_cameras_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Cameras + Lenses</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_audio_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">AirPords + Audio</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_drones_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Drones</a>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_home_category text-center hover-banner-1">
                            <div class="med_image bgg-orange-100">
                                <img src="https://static.swappa.com/static/images/categories/retro/category_fitness_600x600.png"
                                     class="card-img-top" alt="...">
                            </div>
                            <a class="card-title cl-main ">Fitness + Cycling</a>
                        </div>
                    </div>
                </div>
                <div class="mt-3 sell_search card mb-4 p-3 rounded text-center">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 justify-content-center align-items-center">
                        <div class="col">
                            <img class="img-fluid" src="img/trade_in_banner_icons_white.png" alt=""
                                 style="max-height: 65px;">
                            </a>
                        </div>
                        <div class="col">
                            <h3 class="d-block my-2 text-light">
                                Get more green, get paid fast
                            </h3>
                        </div>
                        <div class="col">
                            <a href="#" class="stetched-link btn btn-outline-light d-block mx-5">
                                Sell with Swappa
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="mb-5">
                <div>
                    <h2 class="text-center mb-4">Featured Brands</h2>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 gy-4 justify-content-center">
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/amazon.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Amazon </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/apple.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Apple </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/google.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Google </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/microsoft.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Microsoft </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/fhGsYMux.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Nintendo </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/cZUUeGcU.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Nvidia </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/BzLlckQf.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> OnePlus </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1" id="w-50">
                        <div class="card card_brand_small hover-banner-1">
                            <div class="card-body flex-column">
                                <div class="image text-center">
                                    <img class="img-app" src="/public/img/img_user/ylIjAIYC.png" alt=""/>
                                </div>
                                <a class="mt-3 d-block stretched-link cl-a"> Samsung </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tradein_search_block2 mt-3  card mb-4 p-3 rounded text-center">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-3 justify-content-center align-items-center">
                        <div class="col">
                            <img width="100%"
                                 src="https://static.swappa.com/static/images/banners/local_skyline_purple.png"
                                 alt=""/>
                            </a>
                        </div>
                        <div class="col">
                            <h3 class="d-block my-2 text-light">
                                Next-day delivery in 48 metros
                            </h3>
                        </div>
                        <div class="col">
                            <a href="#" class="stetched-link btn btn-outline-light d-block mx-5">
                                Local Shop
                                <i class="fas fa-arrow-right"></i>

                            </a>
                        </div>

                    </div>
                </div>

            </section>

            <div class="mt-4 mb-4">
                <h2 class="text-center">
                    <i class='bx bx-mobile-alt'></i>
                    iPhones and Phones
                </h2>
                <div class="row row_cols_card_products_nowrap">
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/Apple iphone 11.png" alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPhone 11</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/37/11/37119c3fa35083b0cd5b952f82307ea3.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPhone 12 Pro Max</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/c5/19/c519b238b3cf3151f2ade3422d46703f.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPhone SE 2nd Gen 2020</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/cbd819566cb0be988082a31193e10779.png " alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPhone 12</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/42f7e00af104deaeb08b9e21d2995454.png " alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPhone 11 Pro</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <ul class="nav justify-content-center mt-5">
                    <li class="nav-item">
                        <a class="nav-link-112 link-info">
                            <i class="fa fa-usd"> $ Sell Phone </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-113 link-info">
                            <i class="far fa-arrow-right">Shop Phone</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4 mb-4">
                <h2 class="text-center">
                    <i class='bx bx-laptop'></i>
                    MacBooks and Laptops
                </h2>
                <div class="row row_cols_card_products_nowrap">
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/6cd6e32c4e5b417273b94e2dc9c01079.png" alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">MacBook Air 2020 - 13"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/237934661f4b9ee4c6213ed2a224715c.png" alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">MacBook Pro 2020 - 13"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/ecb8b2dce1fed1c2cc735f1ccd27f0b6.png" alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">MacBook Pro 2019 - 16"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/1c76238d6c9dde348f354d13ce8cc06b.png" alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Microsoft Surface Pro 7</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/a870abeee5293d605f5a3244bdc465a5.png " alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">MacBook Pro 2021 - 16"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="/public/img/img_user/289df0bb882292430ff64e9d72369523.png" alt="Image"
                                         class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">MacBook Pro 2015 (Retina) - 15"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <ul class="nav justify-content-center mt-5">
                    <li class="nav-item">
                        <a class="nav-link-112 link-info">
                            <i class="fa fa-usd"> $ Sell Phone </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-113 link-info">
                            <i class="far fa-arrow-right">Shop Phone</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4 mb-4">
                <h2 class="text-center">
                    <i class='bx bx-tab'></i>
                    iPads and Tablets
                </h2>
                <div class="row row_cols_card_products_nowrap">
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/eb/58/eb5883d8dbc048f9313cec3c75403d90.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad Air 2</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/e4/a4/e4a42f2a249021fbbbce71eed0139c1e.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad Air</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/45/8c/458c03042a6031bbd8fd409fc0425815.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad Pro 12.9" 5th Gen 2021</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/14/97/14976273fffd65831fe1fdd09244d392.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad Pro 9.7"</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/17/7b/177b37f00f1461b4479f01b2f69f6e0c.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad 7th Gen</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/bd/78/bd78193fbdb635774f239f1c1616671f.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple iPad Pro 11" 3rd Gen 2021</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <ul class="nav justify-content-center mt-5">
                    <li class="nav-item">
                        <a class="nav-link-112 link-info">
                            <i class="fa fa-usd"> $ Sell Phone </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-113 link-info">
                            <i class="far fa-arrow-right">Shop Phone</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4 mb-4">
                <h2 class="text-center">
                    <i class='bx bxs-watch'></i>
                    Watches and Wearables
                </h2>
                <div class="row row_cols_card_products_nowrap">
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/ae/5c/ae5c04261fd20e88b478a97a59e64f33.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple Watch Series 7 45mm</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/8b/04/8b04c4c013aaa5612c490eca235750d8.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple Watch Series 6 44mm</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/3b/eb/3beb5390809ba3aca6d638a088752ae5.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Samsung Galaxy Watch4
                                </h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/5a/22/5a22af83dfb639d8e9b27cff744432f8.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple Watch Series 7 41mm</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/79/40/79405440919cddae6e390ff0676c2fc6.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple Watch Series 8 45mm</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/be/fd/befdd494c173dd26714eae7a5d7eb1c5.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Apple Watch Series 5 40mm</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <ul class="nav justify-content-center mt-5">
                    <li class="nav-item">
                        <a class="nav-link-112 link-info">
                            <i class="fa fa-usd"> $ Sell Phone </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-113 link-info">
                            <i class="far fa-arrow-right">Shop Phone</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-4 mb-4">
                <h2 class="text-center">
                    <i class='bx bx-joystick'></i>
                    Video Games and Consoles
                </h2>
                <div class="row row_cols_card_products_nowrap">
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/26/56/2656a781f9848ba15db230122596df45.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">PlayStation 5 Standard Edition
                                </h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/9d/d0/9dd0a62f8e05fe338c41fbb9cdf48c12.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Nintendo Switch</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/8a/f9/8af9d5a13dfb17dd851eef4d65a9fd40.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Xbox Series X (2020)</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/a9/e9/a9e965686eb76639c880c6724728d334.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Meta Quest 2</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/5f/46/5f467a0d5709e165220bcbff86c6f506.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">Xbox Series S (2020)
                                </h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card_product hover-banner-1">
                            <div class="card-body text-center">
                                <a href="#" class="stretched-link image">
                                    <img src="https://static.swappa.com/images/cache/87/fe/87fe4e7883e7eee2adbfc573da7f8bfc.png"
                                         alt="Image" class="img-fluid max-h"/>
                                </a>
                                <h6 class="card-title title">PlayStation 5 Digital Edition</h6>
                                <div class="reviews">
                                    <div class="stars_value d-block text-center text-nowrap">
                                        <i class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='cl-star bx bxs-star'></i><i class='cl-star bx bxs-star'></i><i
                                            class='last-star cl-star bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="price">
                                        <p class="new-price">$231<span class="price-old">$699</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <ul class="nav justify-content-center mt-5">
                    <li class="nav-item">
                        <a class="nav-link-112 link-info">
                            <i class="fa fa-usd"> $ Sell Phone </i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-113 link-info">
                            <i class="far fa-arrow-right">Shop Phone</i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="title-h2-ads text-center mb-5 mt-4">
                <h2>Why Swappa?</h2>
            </div>
            <div class="more-us row">
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-blue bx bxs-hand'></i>
                    </div>
                    <div class="about-us">
                        <h2>People Powered</h2>
                    </div>
                    <div class="about-us-more">
                        <p>On Swappa, you buy and sell directly with other users. No middleman means you get the best
                            price and most value.</p>
                    </div>
                </div>
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-red bx bx-stop-circle'></i>
                    </div>
                    <div class="about-us">
                        <h2>No Junk</h2>
                    </div>
                    <div class="about-us-more">
                        <p>Swappa does not allow broken items. Every product has listing requirements and an approval
                            process.</p>
                    </div>
                </div>
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-blue bx bx-list-ol'></i>
                    </div>
                    <div class="about-us">
                        <h2>Verified Listings</h2>
                    </div>
                    <div class="about-us-more">
                        <p>Every listing on Swappa is verified by our expert staff to ensure our strict listings
                            requirements are followed. Buy with confidence.</p>
                    </div>
                </div>
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-blue bx bx-globe'></i>
                    </div>
                    <div class="about-us">
                        <h2>F**k Fraud</h2>
                    </div>
                    <div class="about-us-more">
                        <p>Our moderation staff uses the latest, greatest AI and machine-learning tools to fight fraud
                            before it affects our users.</p>
                    </div>
                </div>
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-green bx bxs-badge-dollar'></i>
                    </div>
                    <div class="about-us">
                        <h2>Fair Fees</h2>
                    </div>
                    <div class="about-us-more">
                        <p>Swappa has fair fees, just 3% per party. That means buyers save more and sellers keep more
                            compared to other marketplaces.</p>
                    </div>
                </div>
                <div class="big-more-us col-6 col-sm-4">
                    <div class="icons-us">
                        <i class='color-blue bx bx-mail-send'></i>
                    </div>
                    <div class="about-us">
                        <h2>Great Support</h2>
                    </div>
                    <div class="about-us-more">
                        <p>Our support is provided by real humans who actually care. Swappa's typical response time for
                            help requests is around 20 minutes!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-4">
            <h2 class="text-center">
                <i class="far fa-mobile-phone"></i>
                Recognized for value and safety
            </h2>
        </div>
        <div class="well">
            <div class="row justify-content-around">
                <div class="col-lg-2 text-center col-xs-4 col-2">
                    <a>
                        <img width="100px" src="img/press_wsj.png" alt=""/>
                    </a>
                </div>
                <div class="col-lg-2 text-center col-xs-4 col-2">
                    <a>
                        <img width="100px" src="/public/img/img_user/press_lifehacker.png" alt=""/>
                    </a>
                </div>
                <div class="col-lg-2 text-center col-xs-4 col-2">
                    <a>
                        <img width="100px" src="/public/img/img_user/press_theverge.png" alt=""/>
                    </a>
                </div>
                <div class="col-lg-2 text-center col-xs-4 col-2">
                    <a>
                        <img width="100px" src="/public/img/img_user/press_tomsguide.png" alt=""/>
                    </a>
                </div>
                <div class="col-lg-2 text-center col-xs-4 col-2">
                    <a>
                        <img width="100px" src="/public/img/img_user/press_cnet.png" alt=""/>
                    </a>
                </div>
            </div>
        </div>
        
        <section style="margin-bottom: 10px">
            <hr class="line-last"/>
        </section>
    </div>
    </div>
</section>
<footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
    <div class="container-fluid tm-container-small">
        <div class="more-last-footer">
            <div class="col ">
                <ul>
                    <li>
                        <a href="#">Buy</a>
                    </li>
                    <li>
                        <a href="#">Buyer Guides</a>
                    </li>
                    <li>
                        <a href="#">Buy Phones</a>
                    </li>
                    <li>
                        <a href="#">Buy Tablets</a>
                    </li>
                    <li>
                        <a href="#">Buy MacBooks</a>
                    </li>
                    <li>
                        <a href="#">Buy Laptops</a>
                    </li>
                    <li>
                        <a href="#">Buy iPhones</a>
                    </li>
                    <li>
                        <a href="#">Buy Apple</a>
                    </li>

                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">Unlocked</a>
                    </li>
                    <li>
                        <a href="#">Video Games</a>
                    </li>
                    <li>
                        <a href="#">Smartwatches</a>
                    </li>
                    <li>
                        <a href="#">Cameras+Lenses</a>
                    </li>
                    <li>
                        <a href="#">Home Tech</a>
                    </li>
                    <li>
                        <a href="#">AirPods+Audio</a>
                    </li>
                    <li>
                        <a href="#">Drones+DJI</a>
                    </li>
                    <li>
                        <a href="#">Fitness+Cycling</a>
                    </li>

                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">Sell</a>
                    </li>
                    <li>
                        <a href="#">Trade-in</a>
                    </li>
                    <li>
                        <a href="#">Sell Phones</a>
                    </li>
                    <li>
                        <a href="#">Sell Tablets</a>
                    </li>
                    <li>
                        <a href="#">Sell MacBooks</a>
                    </li>
                    <li>
                        <a href="#">Sell Laptops</a>
                    </li>
                    <li>
                        <a href="#">Sell iPhones</a>
                    </li>
                    <li>
                        <a href="#">Sell Apple</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">IMEI Check</a>
                    </li>
                    <li>
                        <a href="#">Swappa Local</a>
                    </li>
                    <li>
                        <a href="#">Download App</a>
                    </li>
                    <li>
                        <a href="#">Catalog</a>
                    </li>
                    <li>
                        <a href="#">Carriers</a>
                    </li>
                    <li>
                        <a href="#">Phone Repair</a>
                    </li>
                    <li>
                        <a href="#">Swappa vs. eBay</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                    <li>
                        <a href="#">Search</a>
                    </li>
                    <li>
                        <a href="#">ADA Accessibility</a>
                    </li>
                    <li>
                        <a href="#"><Sustainability></Sustainability></a>
                    </li>
                    <li>
                        <a href="#">Prices</a>
                    </li>
                    <li>
                        <a href="#">Fees</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="#">About Swappa</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Forums</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Press</a>
                    </li>
                    <li>
                        <a href="#">Policies</a>
                    </li>
                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="last-main">
            <div class="social-link last_main_f">
                <a href="#">
                    <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-linkedin'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-telegram'></i>
                </a>
            </div>
            <div class="social-link last_main_f">
                <div class="last-logo">
                    <a href="#"><img src="https://static.swappa.com/static/images/logos/swappa_wordmark_ffffff.svg" alt=""></a>
                </div>
            </div>
            <div class="social-link last_main_f">
                Copyright © 2010-2022 LA SON, LLC
            </div>
        </div>
    </div>
    </div>
</footer>
<script src="/public/lib/jquery-3.6.3.js"></script>
<script>
</script>
</body>

</html>