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
                        <h2>Card List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Cart Area =================-->
<section class="cart_area section_padding">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{ '/design/estore' }}/assets/img/arrivel/arrivel_1.png" alt="" />
                                </div>
                                <div class="media-body">
                                    <p>Minimalistic shop for multipurpose use</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$360.00</h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                                  class="input-text qty input-number" />
                                <button
                                  class="increase input-number-increment items-count" type="button">
                                  <i class="ti-angle-up"></i>
                                </button>
                                <button
                                  class="reduced input-number-decrement items-count" type="button">
                                  <i class="ti-angle-down"></i>
                                </button> -->
                                <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="10">
                                <span class="input-number-increment"> <i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td>
                            <h5>$720.00</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="{{ '/design/estore' }}/assets/img/arrivel/arrivel_2.png" alt="" />
                                </div>
                                <div class="media-body">
                                    <p>Minimalistic shop for multipurpose use</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>$360.00</h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                <input class="input-number" type="text" value="1" min="0" max="10">
                                <span class="input-number-increment"> <i class="ti-plus"></i></span>
                            </div>
                        </td>
                        <td>
                            <h5>$720.00</h5>
                        </td>
                    </tr>
                    <tr class="bottom_button">
                        <td>
                            <a class="btn_1" href="#">Update Cart</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="cupon_text float-right">
                                <a class="btn_1" href="#">Close Coupon</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            <h5>$2160.00</h5>
                        </td>
                    </tr>
                    <tr class="shipping_area">
                        <td></td>
                        <td></td>
                        <td>
                            <h5>Shipping</h5>
                        </td>
                        <td>
                            <div class="shipping_box">
                                <ul class="list">
                                    <li>
                                        Flat Rate: $5.00
                                        <input type="radio" aria-label="Radio button for following text input">
                                    </li>
                                    <li>
                                        Free Shipping
                                        <input type="radio" aria-label="Radio button for following text input">
                                    </li>
                                    <li>
                                        Flat Rate: $10.00
                                        <input type="radio" aria-label="Radio button for following text input">
                                    </li>
                                    <li class="active">
                                        Local Delivery: $2.00
                                        <input type="radio" aria-label="Radio button for following text input">
                                    </li>
                                </ul>
                                <h6>
                                    Calculate Shipping
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </h6>
                                <select class="shipping_select">
                                    <option value="1">Bangladesh</option>
                                    <option value="2">India</option>
                                    <option value="4">Pakistan</option>
                                </select>
                                <select class="shipping_select section_bg">
                                    <option value="1">Select a State</option>
                                    <option value="2">Select a State</option>
                                    <option value="4">Select a State</option>
                                </select>
                                <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                                <a class="btn_1" href="#">Update Details</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="#">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
</section>
<!--================End Cart Area =================-->

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

<!-- Scrollup, nice-select, sticky -->
<script src="{{ '/design/estore' }}/./assets/js/jquery.scrollUp.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.nice-select.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.sticky.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.magnific-popup.js"></script>

<!-- contact js -->
<script src="{{ '/design/estore' }}/./assets/js/contact.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.form.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.validate.min.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/mail-script.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ '/design/estore' }}/./assets/js/plugins.js"></script>
<script src="{{ '/design/estore' }}/./assets/js/main.js"></script>
</body>

</html>
