<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <div id="header-top" class="d-none d-xl-block">
        <div class="container">
            <div class="row">
                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-4 text-left">
                    <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Single HeaderTop Start ==-->
                <div class="col-lg-4 text-center">
                    <i class="fa fa-mobile"></i> +1 800 345 678
                </div>
                <!--== Single HeaderTop End ==-->

                <!--== Social Icons Start ==-->
                <div class="col-lg-4 text-right">
                    <div class="header-social-icons">
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <!--== Social Icons End ==-->
            </div>
        </div>
    </div>
    <!--== Header Top End ==-->

    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <!--== Logo Start ==-->
                <div class="col-lg-4">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('assets') }}\frontend/img/logo.png" alt="JSOFT">
                    </a>
                </div>
                <!--== Logo End ==-->

                <!--== Main Menu Start ==-->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu alignright">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">services</a></li>
                            <li><a href="#">Cars</a>
                                <ul>
                                    <li><a href="car-left-sidebar.html">Car Left Sidebar</a></li>
                                    <li><a href="car-right-sidebar.html">Car Right Sidebar</a></li>
                                    <li><a href="car-without-sidebar.html">Car Without Sidebar</a></li>
                                    <li><a href="car-details.html">Car Details</a></li>
                                </ul>
                            </li>
                            <li><a href="index.html">Pages</a>
                                <ul>
                                    <li><a href="package.html">Pricing</a></li>
                                    <li><a href="driver.html">Driver</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="help-desk.html">Help Desk</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="article.html">Blog Page</a></li>
                                    <li><a href="article-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->
