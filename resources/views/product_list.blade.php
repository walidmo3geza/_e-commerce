<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Estore </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ '/design/estore' }}/assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Category 1</a></p>
                                <p><a href="#">Category 2</a></p>
                                <p><a href="#">Category 3</a></p>
                                <p><a href="#">Category 4</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                <p><a href="#">Type 1</a></p>
                                <p><a href="#">Type 2</a></p>
                                <p><a href="#">Type 3</a></p>
                                <p><a href="#">Type 4</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Cervical pillow for airplane
                                        car office nap pillow</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Foam filling cotton slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product6.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product4.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product5.png" alt="" class="img-fluid">
                                <h3> <a href="single-product.html">Memory foam filling cotton Slow rebound pillows</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product3.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Sleeping orthopedic sciatica Back Hip Joint Pain relief</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product2.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{ '/design/estore' }}/assets/img/categori/product1.png" alt="" class="img-fluid">
                                <h3> <a href="{{ route('single-product') }}">Geometric striped flower home classy decor</a> </h3>
                                <p>From $5</p>
                            </div>
                        </div>
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->

<!-- client review part here -->

<!-- client review part end -->

<!-- Shop Method Start-->

<!-- Shop Method End-->

<!-- subscribe part here -->

<!-- subscribe part end -->

<!-- JS here -->
<!-- All JS Custom Plugins Link Here here -->
<script src="{{ '/design/estore' }}/./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ '/design/estore' }}/./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/popper.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ '/design/estore' }}/./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ '/design/estore' }}/./assets/js/owl.carousel.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/slick.min.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="{{ '/design/estore' }}/./assets/js/wow.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/animated.headline.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ '/design/estore' }}/./assets/js/jquery.scrollUp.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.nice-select.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="{{ '/design/estore' }}/./assets/js/contact.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.form.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.validate.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/mail-script.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ '/design/estore' }}/./assets/js/plugins.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/main.js"></script>

<!-- swiper js -->
<script src="{{ '/design/estore' }}/./assets/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="{{ '/design/estore' }}/./assets/js/mixitup.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.counterup.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/waypoints.min.js"></script>


</body>

</html>
