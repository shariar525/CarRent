<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{ asset('assets') }}\frontend/favicon.ico" type="image/x-icon" />

    <title>Car Rent BD</title>

    <!--=== Bootstrap CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="{{ asset('assets') }}\frontend/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{ asset('assets') }}\frontend/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="{{ asset('assets') }}\frontend/{{ asset('assets') }}\frontend/css/responsive.css" rel="stylesheet">



    <!--<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>

<body class="loader-active">

<!--== Preloader Area Start ==-->
<div class="preloader">
    <div class="preloader-spinner">
        <div class="loader-content">
            <img src="{{ asset('assets') }}\frontend/img/preloader.gif" alt="JSOFT">
        </div>
    </div>
</div>
<!--== Preloader Area End ==-->

@include('frontend.partials.header')



<!--== Slider Area Start ==-->
@yield('slider_area')
<!--== Slider Area End ==-->


@yield('main_content')


<!--== Footer Area Start ==-->
<section id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>About Us</h2>
                        <div class="widget-body">
                            <img src="{{ asset('assets') }}\frontend/img/logo.png" alt="JSOFT">
                            <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                            <div class="newsletter-area">
                                <form action="index.html">
                                    <input type="email" placeholder="Subscribe Our Newsletter">
                                    <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>Recent Posts</h2>
                        <div class="widget-body">
                            <ul class="recent-post">
                                <li>
                                    <a href="#">
                                        Hello Bangladesh!
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Lorem ipsum dolor sit amet
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Hello Bangladesh!
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        consectetur adipisicing elit?
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->

                <!-- Single Footer Widget Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-widget">
                        <h2>get touch</h2>
                        <div class="widget-body">
                            <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                            <ul class="get-touch">
                                <li><i class="fa fa-map-marker"></i> 800/8, Kazipara, Dhaka</li>
                                <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                                <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li>
                            </ul>
                            <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</section>
<!--== Footer Area End ==-->

<!--== Scroll Top Area Start ==-->
<div class="scroll-top">
    <img src="{{ asset('assets') }}\frontend/img/scroll-top.png" alt="JSOFT">
</div>
<!--== Scroll Top Area End ==-->

<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/jquery-3.2.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/jquery-migrate.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/bootstrap.min.js"></script>
<!--=== Gijgo Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/gijgo.js"></script>
<!--=== Vegas Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/vegas.min.js"></script>
<!--=== Isotope Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/isotope.min.js"></script>
<!--=== Owl Caousel Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/owl.carousel.min.js"></script>
<!--=== Waypoint Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/waypoints.min.js"></script>
<!--=== CounTotop Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/counterup.min.js"></script>
<!--=== YtPlayer Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/mb.YTPlayer.js"></script>
<!--=== Magnific Popup Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/magnific-popup.min.js"></script>
<!--=== Slicknav Min Js ===-->
<script src="{{ asset('assets') }}\frontend/js/plugins/slicknav.min.js"></script>

<!--=== Mian Js ===-->
<script src="{{ asset('assets') }}\frontend/js/main.js"></script>

</body>

</html>
