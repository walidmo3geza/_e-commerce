<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ '/design/estore' }}/assets/img/favicon.ico">
    <link rel="stylesheet" href="admin.css">
    <title>admin page</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.css">
    <!-- CSS here -->
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
    <!--[if lt IE 9]>
    <script src="{{ '/design/estore' }}/bootstrap-4.3.1-dist/js/html5shiv.min.js"></script>
    <script src="{{ '/design/estore' }}/bootstrap-4.3.1-dist/js/respond.min.js"></script>
    <![endif]-->
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
                                <a href="index.html"><img src="{{ '/design/estore' }}/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="admin.html">Home</a></li>
                                        <li><a href="admincato.html">Catagori</a></li>
                                        <li class="hot"><a href="#">Latest</a>
                                            <ul class="submenu">
                                                <li><a href="adminpl.html"> Product list</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="history.html">History</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="admincart.html">Card</a></li>
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
                                        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block"> <a href="#" class="btn header-btn">Sign in</a></li>
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
    <div class="single-slider slider-height2 d-flex align-items-center" id="one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Catogaries PAGE</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- current products -->
<br><br><br>
<div class="container">
    <h3 style="color:rgb(252, 64, 142)">CURRENT Catogaries</h3>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_11.png">
                <h2 class="card-title">Catogary 1</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_1.png">
                <h2 class="card-title">Catogary 2</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_2.png">
                <h2 class="card-title">Catogary 3</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_3.png">
                <h2 class="card-title">Catogary 4</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_4.png">
                <h2 class="card-title">Catogary 5</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_5.png">
                <h2 class="card-title">Catogary 6</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_6.png">
                <h2 class="card-title">Catogary 7</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_7.png">
                <h2 class="card-title">Catogary 8</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_8.png">
                <h2 class="card-title">Catogary 9</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_9.png">
                <h2 class="card-title">Catogary 10</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="text-align: center;">
                <img class="card-img-top" src="{{ '/design/estore' }}/assets\img\categori\category_10.png">
                <h2 class="card-title">Catogary 11</h2>
                <div class="card-block">
                    <button class="btn btn-danger">UPDATE</button>
                    <button class="btn btn-danger">DELETE</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of current products -->
<!-- add product -->
<br><br><br>
<div class="container">
    <h3 style="color:rgb(252, 64, 142)">ADD NEW Catogary</h3>
</div>
<br>
<div class="container">
    <div class="row" style="text-align: center; border: 1px solid; height: 300px; padding: 30px;">
        <div class="col-md-6">
            <h2 id="two">Catogary id &nbsp &nbsp</h2>
            <input type="number" placeholder="enter product id">
        </div>
        <div class="col-md-6">
            <h2 id="two">Catogary title &nbsp &nbsp</h2>
            <input type="text" placeholder="enter product title">
        </div>
        <div class="col-md-6">
            <h2 id="two">Catogary image</h2>
            <button class="btn-primary">CHOOSE FILE</button>
        </div>
        <div class="col-md-6">
            <h2 id="two">Catogary code &nbsp </h2>
            <input type="number" placeholder="enter product code">
        </div>
        <div class="col-md-12">
            <button class="btn btn-danger">ADD Catogary</button>
        </div>
    </div>
</div>
<!-- end of add products -->
<br><br>
<script type="text/javascript" src="{{ '/design/estore' }}/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="{{ '/design/estore' }}/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</body>
</html>
