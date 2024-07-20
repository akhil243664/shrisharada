@extends('layout.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(public/assets/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="layer-outer-icon" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <img src="{{ url('public/assets/images/icon/icon-breadcrumb.png') }}" alt="Icon">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s"
                            data-wow-duration="1500ms">
                            <ul class="clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Our Doctors</li>
                            </ul>
                        </div>

                        <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <h2>Our Doctors</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Team Style2 Area-->
    <section class="team-style2-area">
        <div class="container">
            <div class="row">
                <!--Start Single Team Member-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-member wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/about/doctor.png') }}" alt="Awesome Image">
                                <div class="overlay-style-one bg2"></div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <div class="left">
                                <h3><a href="#">Dr. Adarsh S A</a></h3>
                                <p>MBBS, DOMS, Consultant Ophthalmologist</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-member wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/about/doctor.png') }}" alt="Awesome Image">
                                <div class="overlay-style-one bg2"></div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <div class="left">
                                <h3><a href="#">Dr. Priyanka Adarsh</a></h3>
                                <p>MBBS, DLO, Consultant ENT Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-member wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/about/doctor.png') }}" alt="Awesome Image">
                                <div class="overlay-style-one bg2"></div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <div class="left">
                                <h3><a href="#">Dr. Prakash S</a></h3>
                                <p>MBBS, MS, Phaco Surgeon</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-member wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/about/doctor.png') }}" alt="Awesome Image">
                                <div class="overlay-style-one bg2"></div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <div class="left">
                                <h3><a href="#">Dr. Prithvi Chendrakonth</a></h3>
                                <p>MBBS, MJ, Fellowship in Retina, Visiting Retina Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Team Member-->

            </div>
        </div>
    </section>
    <!--End Team Style2 Area-->
@endsection
