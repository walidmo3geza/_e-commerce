<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Estore </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ '/design/estore' }}/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ '/design/estore' }}/assets/css/style.css">
</head>

<body>

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ '/design/estore' }}/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">

            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                                <a href="{{ route('index') }}"><img src="{{ '/design/estore' }}/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('Catagori') }}">Catagori</a></li>
                                        <li class="hot"><a href="#">Latest</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('product_list') }}"> Product list</a></li>
                                                <li><a href="{{ route('single-product') }}"> Product Details</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                <li><a href="{{ route('cart') }}">Card</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="shopping-card">
                                        <a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block"> <a href="{{ route('login') }}" class="btn header-btn">Sign in</a></li>
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ '/design/estore' }}/assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Product Catagori</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Latest Products Start -->
    <section class="latest-product-area latest-padding">
        <div class="container">
            <div class="row product-btn d-flex justify-content-between">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>

            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card foure -->
                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->

    <!-- Latest Offers Start -->

    <!-- Latest Offers End -->
    <!-- Shop Method Start-->

    <!-- Shop Method End-->
    <!-- Gallery Start-->
    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-items">
                        <img src="{{ '/design/estore' }}/assets/img/gallery/gallery1.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ '/design/estore' }}/assets/img/gallery/gallery2.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ '/design/estore' }}/assets/img/gallery/gallery3.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ '/design/estore' }}/assets/img/gallery/gallery4.jpg" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{ '/design/estore' }}/assets/img/gallery/gallery5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End-->

</main>


<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{{ '/design/estore' }}./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ '/design/estore' }}./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/popper.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ '/design/estore' }}./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ '/design/estore' }}./assets/js/owl.carousel.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ '/design/estore' }}./assets/js/wow.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/animated.headline.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ '/design/estore' }}./assets/js/jquery.scrollUp.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.nice-select.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="{{ '/design/estore' }}./assets/js/contact.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.form.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.validate.min.js"></script>
<script src="{{ '/design/estore' }}./assets/js/mail-script.js"></script>
<script src="{{ '/design/estore' }}./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ '/design/estore' }}./assets/js/plugins.js"></script>
<script src="{{ '/design/estore' }}./assets/js/main.js"></script>

</body>
</html>
