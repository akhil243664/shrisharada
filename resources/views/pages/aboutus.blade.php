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
                                <li class="active">About Us</li>
                            </ul>
                        </div>

                        <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <h2>About Us</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-style1-text-box">
                        <div class="sec-title">
                            <h2><span>Learn</span> more about our Shri Sgarada<br> Eye and Ent Hospital</h2>
                        </div>
                        <div class="inner-contant">
                            <div class="text-box">
                                <p>At Shri Sharada Eye Hospital, we are
                                    dedicated to providing exceptional eye care
                                    services to our patients. With a team of highly
                                    skilled and experienced ophthalmologists,
                                    advanced technology, and a patient-centric
                                    approach, we strive to enhance and protect
                                    your vision. Our state-of-the-art facilities are
                                    equipped to handle a wide range of eye
                                    conditions, ensuring you receive the best
                                    possible treatment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-style1-image-box">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="single-image-box image1">
                                    <img src="{{ url('public/assets/images/about/ent_check.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-12">
                                <div class="single-image-box image2">
                                    <img src="{{ url('public/assets/images/about/about-2.jpg') }}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="single-image-box">
                                    <img src="{{ url('public/assets/images/about/about-3.jpg') }}" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="icon"><span class="icon-vision-1"></span></div>
                                        <h2>Trusted by more<br> than <span>21000</span> happy<br> patients</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End About Style1 Area-->

    <!--Start Slogan Style3 Area-->
    <section class="slogan-style3-area"
        style="background-image: url(public/assets/images/parallax-background/slogan-style3-area-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-content-style3 paroller">
                        <div class="title">
                            <h2><span>For a clear</span> tomorrow, Bring<br> their world into focus</h2>
                        </div>
                        <div class="btns-box">
                            <a class="btn-one" href="https://wa.me/+919400308374?text=Hi"><span
                                    class="txt">Discover More<i class="fa fa-angle-double-right round"
                                        aria-hidden="true"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Style3 Area-->

    <!--Start Team Style2 Area-->
    <section class="team-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="top-title">
                        <div class="sec-title">
                            <h2><span>Expert</span> & experienced<br> eye & ent specialists</h2>
                        </div>
                        <div class="text">
                            <p>Renowned specialists providing comprehensive eye care with advanced treatments for optimal
                                vision and eye health.</p>
                        </div>
                    </div>
                </div>
            </div>
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
