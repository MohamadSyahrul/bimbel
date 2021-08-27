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
                                        <li class="hide-mobile"><i class="fas "></i>Jl. Dewi Sartika No. 8A Banaran,
                                            Kertosono</li>

                                        <li class="hide-mobile"><i class="fas "></i>info@email.com</li>

                                    </ul>
                                </div>
                                <div class="header-info-right    d-md-none"><a href="keranjang"><i
                                            class="fa "></i>Keranjang</a></div>

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
                                                <a href="http://traineasyv3.intermaticsng.com/sessions">Kontak</a>
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
                                    <a href="{{ url('keranjang') }}" style="padding: 18px 22px;    text-align: center;"
                                        class="tbtn header-btn"><i class="fa "></i>Keranjang Anda</a>
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
                                    <p data-animation="fadeInLeft" data-delay=".4s">Professional Courses</p>

                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Get the best courses!</h1>

                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="#" class="btn hero-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="http://traineasyv3.intermaticsng.com/img/demo/slide2.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <p data-animation="fadeInLeft" data-delay=".4s">Training Sessions</p>

                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Get the best training</h1>

                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                        <a href="#" class="btn hero-btn">Learn More</a>
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
        <!-- <div class="team-profile team-padding">
        <div class="container">
            <div class="row">

                
                                                            <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30"> -->
        <!-- Front -->
        <!-- <div class="single-profile-front">
                            <div class="profile-img">
                                <img src="http://traineasyv3.intermaticsng.com/img/demo/service1.jpg" alt="">
                            </div>
                            <div class="profile-caption">
                                <h4><a href="#">Quality Training</a></h4>
                                <p>
                                    <p>We provide high quality in person training at all our locations.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                                                                                    <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30"> -->
        <!-- Front -->
        <!-- <div class="single-profile-front">
                            <div class="profile-img">
                                <img src="http://traineasyv3.intermaticsng.com/img/demo/service2.jpg" alt="">
                            </div>
                            <div class="profile-caption">
                                <h4><a href="#">Online Training</a></h4>
                                <p>
                                    Enrol for one of our online courses and learn at your own pace! We have different modules available for all your learning needs!<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                                            
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30"> -->
        <!-- Back -->
        <!-- <div class="single-profile-back-last">
                            <h2>The Best Training Company</h2>
                            <p><p>We are the best training service provider in our Industry! Get quality training now!<br></p></p>
                            <a href="#">Learn More »</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> -->
        <!-- Team-profile End-->



        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>KELAS TERBATAS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/sd.jpg') }}" alt="Business Administration"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SD / MI</span>
                                <h4><a href="{{ url('/detailkelas') }}">Sales 101</a></h4>
                                <p>Learn the basics of Business Administration</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/smp.png') }}" alt="Sales 101"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMP / MTs</span>
                                <h4><a href="{{ url('/detailkelas') }}">Sales 101</a></h4>
                                <p>Learn the basics of selling and marketing.</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/sma.png') }}" alt="Cold Calling Mastery"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMA / MA - IPA</span>
                                <h4><a href="{{ url('/detailkelas') }}">Cold Calling Mastery</a></h4>
                                <p>A Structured Approach to Selling Over the Telephone</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/sma.png') }}" alt="Business Administration"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMA / MA - IPS</span>
                                <h4><a href="{{ url('/detailkelas') }}">Business Administration</a></h4>
                                <p>Learn the basics of Business Administration</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/sbmptn.jpg') }}" alt="Sales 101"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SBMPTN</span>
                                <h4><a href="{{ url('/detailkelas') }}">Sales 101</a></h4>
                                <p>Learn the basics of selling and marketing.</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/dinas.jpg') }}" alt="Cold Calling Mastery"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>KEDINASAN / IKATAN DINAS</span>
                                <h4><a href="{{ url('/detailkelas') }}">Cold Calling Mastery</a></h4>
                                <p>A Structured Approach to Selling Over the Telephone</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="recent-area section-paddingt">
            <div class="container">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>KELAS REGULAR</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/sd.jpg') }}" alt="Business Administration"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SD / MI</span>
                                <h4><a href="{{ url('/detailkelas') }}">Business Administration</a></h4>
                                <p>Learn the basics of Business Administration</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa "></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="{{ url('img/smp.jpg') }}" alt="Sales 101"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMP / MTs</span>
                                <h4><a href="{{ url('/detailkelas') }}">Sales 101</a></h4>
                                <p>Learn the basics of selling and marketing.</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa fa-info-circle"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="http://traineasyv3.intermaticsng.com/courses/1/cold-calling-mastery"><img
                                        class="course-img"
                                        src="http://traineasyv3.intermaticsng.com/usermedia/6/cold-calling_720.jpg"
                                        alt="Cold Calling Mastery"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMA / MA - IPA</span>
                                <h4><a href="{{ url('/detailkelas') }}">Cold Calling Mastery</a></h4>
                                <p>A Structured Approach to Selling Over the Telephone</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa fa-info-circle"></i> Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="http://traineasyv3.intermaticsng.com/usermedia/shutterstock_609507944.jpg"
                                        alt="Business Administration"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SMA / MA - IPS</span>
                                <h4><a href="{{ url('/detailkelas') }}">Business Administration</a></h4>
                                <p>Learn the basics of Business Administration</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa fa-info-circle"></i> Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="http://traineasyv3.intermaticsng.com/usermedia/6/newimages/sales.jpg"
                                        alt="Sales 101"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>SBMPTN</span>
                                <h4><a href="{{ url('/detailkelas') }}">Sales 101</a></h4>
                                <p>Learn the basics of selling and marketing.</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa fa-info-circle"></i> Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30 ">
                            <div class="recent-img text-center" style="max-height: 300px">
                                <a href="{{ url('/detailkelas') }}"><img class="course-img"
                                        src="http://traineasyv3.intermaticsng.com/usermedia/6/cold-calling_720.jpg"
                                        alt="Cold Calling Mastery"></a>

                            </div>
                            <div class="recent-cap pb-5">
                                <span>KEDINASAN / IKATAN DINAS</span>
                                <h4><a href="{{ url('/detailkelas') }}">Cold Calling Mastery</a></h4>
                                <p>A Structured Approach to Selling Over the Telephone</p>
                                <a href="{{ url('/detailkelas') }}" class="btn btn-primary float-right btn-sm"><i
                                        class="fa fa-info-circle"></i> Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->











        <!-- We Trusted Start-->
        <!-- <div class="we-trusted-area trusted-padding blue-bg">
        <div class="container">
            <div class="row d-flex align-items-end">
                                <div class="col-xl-7 col-lg-7">
                    <div class="trusted-img">
                        <img src="http://traineasyv3.intermaticsng.com/img/demo/about.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-xl-5 col-lg-5">
                    <div class="trusted-caption">
                        <h2>1000 Clients and counting...</h2>
                        <p><p>Over the years, we are proud to have serviced more than 1000 satisfied clients! Our client list is spread across all states of the federation. </p><p>Some of our clients include:</p><ol><li>Supertech Limited</li><li>Super Schools Limited</li><li>Andre Montessori School</li><li>Kings Elementary School<br></li></ol></p>
                        <a href="#" class="btn trusted-btn">Read more</a>
                    </div>
                </div>


            </div>
        </div>

    </div> -->
        <!-- We Trusted End-->


        <!-- Testimonial Start -->
        <!-- <div class="testimonial-area fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active" id="testimonials"> -->


        <!-- Single Testimonial -->
        <!-- <div class="single-testimonial pt-65"> -->
        <!-- Testimonial tittle -->
        <!-- <div class="testimonial-icon mb-45">
                                                                                    <img   class="int_imgmaxwh ani-btn " src="http://traineasyv3.intermaticsng.com/img/demo/tes1.png" >
                                        
                                    </div> -->
        <!-- Testimonial Content -->
        <!-- <div class="testimonial-caption text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        <!-- Rattion -->
        <!-- <div class="testimonial-ratting">
                                                                                    </div>
                                        <div class="rattiong-caption">
                                            <span>Shola A<span> - Mom</span> </span>
                                        </div>
                                    </div>
                                </div> -->


        <!-- Single Testimonial -->
        <!-- <div class="single-testimonial pt-65"> -->
        <!-- Testimonial tittle -->
        <!-- <div class="testimonial-icon mb-45">
                                                                                    <img   class="int_imgmaxwh ani-btn " src="http://traineasyv3.intermaticsng.com/img/demo/tes2.png" >
                                        
                                    </div> -->
        <!-- Testimonial Content -->
        <!-- <div class="testimonial-caption text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        <!-- Rattion -->
        <!-- <div class="testimonial-ratting">
                                                                                    </div>
                                        <div class="rattiong-caption">
                                            <span>Tolulope<span> - Dad</span> </span>
                                        </div>
                                    </div>
                                </div> -->


        <!-- Single Testimonial -->
        <!-- <div class="single-testimonial pt-65"> -->
        <!-- Testimonial tittle -->
        <!-- <div class="testimonial-icon mb-45">
                                                                                    <img   class="int_imgmaxwh ani-btn " src="http://traineasyv3.intermaticsng.com/img/demo/tes3.png" >
                                        
                                    </div> -->
        <!-- Testimonial Content -->
        <!-- <div class="testimonial-caption text-center">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                         cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        <!-- Rattion -->
        <!-- <div class="testimonial-ratting">
                                                                                    </div>
                                        <div class="rattiong-caption">
                                            <span>Bunmi<span> - Mom</span> </span>
                                        </div>
                                    </div>
                                </div>

                                </div>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Testimonial End -->
        <!-- Recent Area Start -->
        <!-- <div class="recent-area section-paddingt">
        <div class="container"> -->
        <!-- section tittle -->
        <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Latest Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                                                        <img src="http://traineasyv3.intermaticsng.com/uploads/blog_files/vVfgwrz9B6kA3kWkGQ7e5oRcILdB2QHBHXHcksc9.jpeg" alt="">
                            
                        </div>
                        <div class="recent-cap">
                            <span>Sample post</span>
                            <h4><a href="http://traineasyv3.intermaticsng.com/blog/1/sample-post">Sample post</a></h4>
                            <p>December 02, 2020</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                                                        <img src="http://traineasyv3.intermaticsng.com/uploads/blog_files/v7upgee31HoG5dellDSCm11QA0MFcY4Su5siGngk.png" alt="">
                            
                        </div>
                        <div class="recent-cap">
                            <span>Getting started in programming</span>
                            <h4><a href="http://traineasyv3.intermaticsng.com/blog/2/getting-started-in-programming">Getting started in programming</a></h4>
                            <p>December 02, 2020</p>
                        </div>
                    </div>
                </div>
                            </div>
        </div>
    </div> -->
        <!-- Recent Area End-->




        <!-- Request Back Start -->
        <!-- <div class="request-back-area section-padding30">
                <div class="container">

            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="request-content">
                        <h3>Get in touch</h3>
                        <p><p>Do you have any questions about our services? Get in touch with us now and we will be glad to get back to you shortly.<br></p></p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7"> -->
        <!-- Contact form Start -->
        <!-- <div class="form-wrapper">
                        <form id="contact-form" action="http://traineasyv3.intermaticsng.com/contact/send-mail" method="POST">
                            <input type="hidden" name="_token" value="IGM4pQfa4rZ3ldx2KPehDUxZr69VKyxcCqw7n4bD">                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box  mb-30">
                                        <input required type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-30">
                                        <input required type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="form-box">
                                        <textarea rows="5"   name="message" class="form-control int_btxa" required placeholder="Message"></textarea>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-10">
                                        <label>Verification</label><br/>
                                        <label>
                                                                                            <img src="http://traineasyv3.intermaticsng.com/captcha/default?QMZRD30Y" alt="default?QMZRD30Y">
                                                                                    </label>
                                        <input type="text" name="captcha" placeholder="Enter code above"/>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <button type="submit" class="tbtn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
        <!-- </div>     -->
        <!-- Contact form End -->
        <!-- </div>

        </div>
            </div> -->
        <!-- Request Back End -->

    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="http://traineasyv3.intermaticsng.com">
                                        <img src="http://traineasyv3.intermaticsng.com/img/demo/logo.png">
                                    </a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>We are the best training company on the planet!</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">

                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="http://traineasyv3.intermaticsng.com/courses">Online Courses</a></li>
                                    <li><a href="http://traineasyv3.intermaticsng.com/sessions">Upcoming Sessions</a>
                                    </li>
                                    <li><a href="http://traineasyv3.intermaticsng.com/blog">Blog</a></li>
                                    <li><a href="http://traineasyv3.intermaticsng.com/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Us</h4>
                                <ul>
                                    <li><a href="#">08039485906</a></li>

                                    <li><a href="mailto:info@email.com">info@email.com</a></li>

                                    <li><a href="#">
                                            <p>234, Jersey Road</p>
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
                                <p>© 2020 Company Name.
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
