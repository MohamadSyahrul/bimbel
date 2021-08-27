<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dasapratama</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="IGM4pQfa4rZ3ldx2KPehDUxZr69VKyxcCqw7n4bD">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('img/logo.png') }}" type="image/png">
    <!-- CSS here -->
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/flaticon.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/slicknav.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/animate.min.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/magnific-popup.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/slick.css">
    <link rel="stylesheet"
        href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/nice-select.css">
    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/css/style">
    <link href="http://traineasyv3.intermaticsng.com/css/fix.css" rel="stylesheet" />

    <link rel="stylesheet" href="http://traineasyv3.intermaticsng.com/css/templates/bhome.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91959012-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91959012-2');

    </script>
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ url('img/logo.png') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none_ d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>
                                            <i class="fas "></i><a href="{{ url('login') }}">Login</a> |
                                            <a href="{{ url('register') }}">Register</a>
                                        </li>
                                        <li class="hide-mobile"><i class="fas "></i>Jl. Dewi Sartika No. 8A, Banaran
                                            Kertosono</li>
                                        <li class="hide-mobile"><i class="fas "></i>info@email.com</li>
                                    </ul>
                                </div>
                                <div class="header-info-right    d-md-none"><a href="{{ url('listkeranjang') }}"><i
                                            class="fa fa-cart-plus"></i> Keranjang</a></div>

                                <div class="header-info-right d-none d-md-block">
                                    <ul class="header-social">
                                        <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                         <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                         <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                    <!-- <a href="http://traineasyv3.intermaticsng.com"> -->
                                    <img src="{{ url('img/logoblack.png') }}">

                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a href="{{ url('home') }}">Home</a>
                                            </li>
                                            <!-- <li>
                                            <a href="#" >Info</a>
                                                <ul class="submenu">
                                                    <li><a href="http://traineasyv3.intermaticsng.com/who-we-are" >Who We Are</a></li>
                                                    <li><a href="http://traineasyv3.intermaticsng.com/our-services" >Our Services</a></li>
                                                    <li><a href="http://traineasyv3.intermaticsng.com/faq" >FAQ</a></li>
                                                </ul>
                                        </li> -->
                                            <li>
                                                <a href="{{ url('kelas') }}">Kelas</a>
                                            </li>
                                            <li>
                                                <a href="#contact">Kontak</a>
                                            </li>
                                            <!-- <li>
                                            <a href="http://traineasyv3.intermaticsng.com/blog" >Blog</a>
                                        <li>
                                        <a href="http://traineasyv3.intermaticsng.com/contact" >Contact</a>
                                        </li> -->

                                        </ul>
                                    </nav>
                                </div>
                            </div>


                            <div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="{{ url('listkeranjang') }}"
                                        style="padding: 18px 22px;    text-align: center;" class="tbtn header-btn"><i
                                            class="fa "></i>Keranjang Anda</a>
                                </div>
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
            <div class="slider-active">

                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="http://traineasyv3.intermaticsng.com/img/demo/slide1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Lembaga Bimbingan Belajar yang
                                        Handal</p>

                                    <h5 data-animation="fadeInLeft" data-delay=".6s">Dapatkan Kemampuan Terbaik Anda
                                        dengan Belajar di Lembaga Bimbingan Belajar Dasapratama</h5>

                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <!-- <a  href="#" class="btn hero-btn">Learn More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- slider Area End-->


        <!-- Team-profile Start -->
        <div class="team-profile team-padding">
            <div class="container">
                <div class="row">


                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="{{ url('img/poto1.jpg') }}" alt="">
                                </div>
                                <div class="profile-caption">
                                    <!-- <h4><a href="#">Quality Training</a></h4>
                                <p>
                                    <p>We provide high quality in person training at all our locations.</p>
                                </p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="{{ url('img/poto2.jpg') }}" alt="">
                                </div>
                                <div class="profile-caption">
                                    <!-- <h4><a href="#">Online Training</a></h4>
                                <p>
                                    Enrol for one of our online courses and learn at your own pace! We have different modules available for all your learning needs!<br>
                                </p> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-profile mb-30">
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="{{ url('img/poto3.jpg') }}" alt="">
                                </div>
                                <!-- Back -->
                                <!-- <div class="single-profile-back-last">
                            <h2>The Best Training Company</h2>
                            <p><p>We are the best training service provider in our Industry! Get quality training now!<br></p></p>
                            <a href="#">Learn More »</a>
                        </div> -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Team-profile End-->



            <!-- Recent Area Start -->
            <div class="recent-area section-paddingt">
                <div class="container">
                    <!-- section tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center">
                                <h2>KELAS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-recent-cap mb-30 ">
                                <div class="recent-img text-center" style="max-height: 300px">
                                    <a href="http://traineasyv3.intermaticsng.com/courses/3/business-administration"><img
                                            class="course-img"
                                            src="http://traineasyv3.intermaticsng.com/usermedia/shutterstock_609507944.jpg"
                                            alt="Business Administration"></a>

                                </div>
                                <div class="recent-cap pb-5">
                                    <!-- <span>Regular</span> -->
                                    <h4><a href="{{ url('detailkelas') }}">Regular</a></h4>
                                    <p>Rp. 850.000/semester</p>
                                    <a href="{{ url('detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                            class="fa "></i> Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-recent-cap mb-30 ">
                                <div class="recent-img text-center" style="max-height: 300px">
                                    <a href=""><img class="course-img" src="{{ url('img/logo.png') }}"
                                            alt="Sales 101"></a>

                                </div>
                                <div class="recent-cap pb-5">
                                    <!-- <span>$ 5000.00</span> -->
                                    <h4><a href="{{ url('detailkelas') }}">Pilihan Kelas</a></h4>
                                    <p>Terdapat kelas Terbatas dan Regular</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-recent-cap mb-30 ">
                                <div class="recent-img text-center" style="max-height: 300px">
                                    <a href="{{ url('detailkelas') }}"><img class="course-img"
                                            src="http://traineasyv3.intermaticsng.com/usermedia/6/cold-calling_720.jpg"
                                            alt="Cold Calling Mastery"></a>

                                </div>
                                <div class="recent-cap pb-5">
                                    <!-- <span>Free</span> -->
                                    <h4><a href="{{ url('detailkelas') }}">Terbatas</a></h4>
                                    <p>Rp. 1.250.000 /semester</p>
                                    <a href="{{ url('detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                            class="fa "></i> Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding" id="contact">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="">
                                        <img src="{{ url('img/logo.png') }}">
                                    </a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lembaga Bimbingan Belajar yang dipercaya sejak dulu!!</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Kontak</h4>
                                <ul>
                                    <li><a href="#">08125909773</a></li>

                                    <li><a href="https://www.instagram.com/dasapratamakertosono/">Instagram</a></li>

                                    <li><a href="#">
                                            <p>Jl. Dewi Sartika No. 8A, Banaran Kertosono</p>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p>© 2021 Lembaga Bimbingan Belajar Dasapratama
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/vendor/modernizr-3.5.0.min.js">
    </script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/vendor/jquery-1.12.4.min.js">
    </script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/popper.min.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/owl.carousel.min.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/wow.min.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/animated.headline.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.magnific-popup.js">
    </script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.scrollUp.min.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.nice-select.min.js">
    </script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/contact.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.form.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.validate.min.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/mail-script.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/jquery.ajaxchimp.min.js">
    </script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/plugins.js"></script>
    <script src="http://traineasyv3.intermaticsng.com/templates/buson/assets/assets/js/main.js"></script>


    <div id="demo-creds" style="display: none">

        <div class="alert alert-primary">
            <div class="alert-title">Demo Credentials</div>
            <div class="row">

                <div class="col-md-4 offset-md-2">
                    <strong style="text-decoration: underline">Administrator</strong> <br>
                    Email: <strong>admin@email.com</strong> <br>
                    Password: <strong>password</strong>
                </div>
                <div class="col-md-4  ">
                    <strong style="text-decoration: underline">Student</strong><br>
                    Email: <strong>student@email.com</strong> <br>
                    Password: <strong>password</strong>
                </div>

            </div>
        </div>



    </div>


    <script>
        $('.login-email').val('admin@email.com');
        $('.login-password').val('password');
        var msg = $('#demo-creds').html();
        $('#login-info-box').html(msg);

    </script>
</body>

</html>
