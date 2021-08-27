@extends('frontend.master')
@section('title')
Home
@endsection
@section('content')
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
                            <a href="#"><img class="course-img"
                                    src="http://traineasyv3.intermaticsng.com/usermedia/shutterstock_609507944.jpg"
                                    alt="Business Administration"></a>

                        </div>
                        <div class="recent-cap pb-5">
                            <!-- <span>Regular</span> -->
                            <h4><a href="#">Regular</a></h4>
                            <p>Rp. 850.000/semester</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30 ">
                        <div class="recent-img text-center" style="max-height: 300px">
                            <a href=""><img class="course-img" src="{{ url('img/logo.png') }}" alt="Sales 101"></a>

                        </div>
                        <div class="recent-cap pb-5">
                            <!-- <span>$ 5000.00</span> -->
                            <h4><a href="#">Pilihan Kelas</a></h4>
                            <p>Terdapat kelas Terbatas dan Regular</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30 ">
                        <div class="recent-img text-center" style="max-height: 300px">
                            <a href="#"><img class="course-img"
                                    src="http://traineasyv3.intermaticsng.com/usermedia/6/cold-calling_720.jpg"
                                    alt="Cold Calling Mastery"></a>

                        </div>
                        <div class="recent-cap pb-5">
                            <!-- <span>Free</span> -->
                            <h4><a href="#">Terbatas</a></h4>
                            <p>Rp. 1.250.000 /semester</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
