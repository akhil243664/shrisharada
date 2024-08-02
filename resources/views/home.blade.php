@extends('layout.app')
@section('content')
    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">
                <!-- Slide -->
                <div class="slide slide-1">
                    <div class="icon-holder">
                        <img class="eyeicon" src="{{ url('public/assets/images/resources/logo1.png') }}" alt="Eye Icon">
                    </div>
                    <div class="image-layer" style="background-image:url(public/assets/images/slides/slide111.jpg)"></div>
                    <div class="auto-container">
                        <div class="content right">
                            <h3>Welcome to Shrisharada</h3>
                            <h2>Eye & Ears<br> Hospital</h2>
                            <div class="btns-box">
                                <a class="btn-one" href="#"><span class="txt">Discover More<i
                                            class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide slide-2">
                    <div class="icon-holder">
                        <img class="eyeicon" src="{{ url('public/assets/images/resources/logo1.png') }}" alt="Eye Icon">
                    </div>
                    <div class="image-layer" style="background-image:url(public/assets/images/slides/slide22.jpg)"></div>
                    <div class="auto-container">
                        <div class="content right">
                            <h3>Welcome to Shrisharada</h3>
                            <h2>Eye & Ears<br> Hospital</h2>
                            <div class="btns-box">
                                <a class="btn-one" href="#"><span class="txt">Discover More<i
                                            class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="slide">
                    <div class="icon-holder">
                        <img class="eyeicon" src="{{ url('public/assets/images/resources/logoo.jpg') }}" alt="Eye Icon">
                    </div>
                    <div class="image-layer" style="background-image:url(public/assets/images/slides/slide1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content right">
                            <h3>Welcome to Shrisharada</h3>
                            <h2>Eye & Ears<br> Hospital</h2>
                            <div class="btns-box">
                                <a class="btn-one" href="#"><span class="txt">Discover More<i
                                            class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Main Slider -->


    <!--Start Welcome Area-->
    <section class="welcome-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-7">
                    <div class="welcome-image-box">
                        <img src="{{ url('public/assets/images/resources/welcome1.png') }}" alt="Awesome Image">
                        <div class="experience-box">
                            <h2>20</h2>
                            <h3>Years of<br> practicing</h3>
                        </div>
                        <div class="image2">
                            <img src="{{ url('public/assets/images/resources/welcome2.png') }}" alt="Awesome Image">
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="welcome-content-box">
                        <div class="sec-title">
                            <h2><span>Introducing</span> the quality<br> optometrist clinic</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>Welcome to our premier optometrist clinic, where your vision is our top priority. At our
                                    state-of-the-art facility, we combine advanced technology with personalized care to
                                    ensure the best possible eye health for our patients.</p>
                            </div>
                            <ul>
                                <li>Advanced Diagnostic Technology.</li>
                                <li>Personalized Care.</li>
                                <li>Experienced Professionals.</li>
                                <li>Comprehensive Services.</li>
                            </ul>
                            <div class="bottom-box">
                                <div class="left pull-left">
                                    <div class="text2">
                                        <p>Have any question?</p>
                                        <a href="https://wa.me/+919400308374?text=Hi">Book an appointment</a>
                                    </div>
                                    {{-- <div class="author-info-box1">
                                    <div class="image-box">
                                        <div class="inner">
                                            <img src="{{url('public/assets/images/resources/author-1.png')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="signature-box">
                                        <img src="{{url('public/assets/images/resources/signature.png')}}" alt="Signature">
                                    </div>    
                                </div> --}}
                                </div>
                                <div class="right pull-right">
                                    <div class="patients-box text-center">
                                        <i class="icon-vision"></i>
                                        <h2><span class="timer" data-from="1" data-to="21000" data-speed="5000"
                                                data-refresh-interval="50">21000</span></h2>
                                        <p>Patients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Welcome Area-->

    <!--Start Certified Area-->
    <section class="certified-area">
        <div class="outer-container">
            <div class="outer-box">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="certified-content-box">
                            <div class="sec-title">
                                <h2><span>Shrisharada</span> certified<br> & professional<br> Eye Hospital</h2>
                            </div>
                            <div class="text">
                                <p>Shrisharada Eye Hospital: <br> Advanced Eye and ENT Care for All Your Needs</p>
                                <div class="btns-box">
                                    <a class="btn-one style2" href="https://wa.me/+919400308374?text=Hi"><span class="txt">Book Appointment<i
                                                class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="certified-image-box1">
                            <img src="{{ url('public/assets/images/resources/certifiedimage1.jpg') }}" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="certified-box clearfix">
                            <div class="icon-box">
                                <div class="eye-box"><img src="{{ url('public/assets/images/icon/eye-2.png') }}"
                                        alt="Eye Icon"></div>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <img src="{{ url('public/assets/images/resources/certificate1.jpg') }}"
                                        alt="Awesome Image">
                                </li>
                                <li>
                                    <img src="{{ url('public/assets/images/resources/certificate2.jpg') }}"
                                        alt="Awesome Image">
                                </li>
                                <li>
                                    <img src="{{ url('public/assets/images/resources/certificate3.jpg') }}"
                                        alt="Awesome Image">
                                </li>
                                <li>
                                    <img src="{{ url('public/assets/images/resources/certificate4.jpg') }}"
                                        alt="Awesome Image">
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Certified Area-->

    <!--Start Services Style1 Area-->
    <section class="services-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="top-title">
                        <div class="sec-title">
                            <h2 class="clrwhite"><span>Services</span> we’re offering<br> to our clients</h2>
                        </div>
                        <div class="text">
                            <p>At Shrisharada, we offer a range of specialized services tailored to meet our clients' needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start Single service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style1 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{ url('public/assets/images/services/servicev111.jpg') }}" alt="Awesome Image">
                            <div class="icon"><span class="icon-glasses"></span></div>
                        </div>
                        <div class="text-holder">
                            <h3 class="aligncenter"><a href="#">Surgical Procedure</a></h3>
                            <p class="aligncenter">Here at Shrisharada, we perform surgical procedures with precision to
                                treat and diagnose various conditions.</p>
                            <div class="bottom-box">
                                <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="counting">01</div>
                        </div>
                    </div>
                </div>
                <!--End Single service Style1-->
                <!--Start Single service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style1 wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{ url('public/assets/images/services/servicev12.jpg') }}" alt="Awesome Image">
                            <div class="icon"><span class="icon-visualization"></span></div>
                        </div>
                        <div class="text-holder">
                            <h3 class="aligncenter"><a href="#">All Laser Lasik</a></h3>
                            <p class="aligncenter">At Shrisharada, our All Laser Lasik offers precise, blade-free vision
                                correction for optimal results.</p>
                            <div class="bottom-box" id="bottombox">
                                <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="counting">02</div>
                        </div>
                    </div>
                </div>
                <!--End Single service Style1-->
                <!--Start Single service Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-service-style1 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{ url('public/assets/images/services/servicev13.jpg') }}" alt="Awesome Image">
                            <div class="icon"><span class="icon-vision-1"></span></div>
                        </div>
                        <div class="text-holder">
                            <h3 class="aligncenter"><a href="#">Cornea & Glaucoma</a></h3>
                            <p class="aligncenter">Shrisharada offers expert treatment and management for cornea and
                                glaucoma issues, ensuring optimal eye health.</p>
                            <div class="bottom-box">
                                <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="counting">03</div>
                        </div>
                    </div>
                </div>
                <!--End Single service Style1-->
            </div>
        </div>
    </section>
    <!--End Services Style1 Area-->

    <!--Start Slogan Area-->
    {{-- <section class="slogan-area"
        style="background-image: url(public/assets/images/parallax-background/slogan-area-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-content">
                        <div class="left paroller">
                            <div class="title">
                                <h2>Are you looking for a eye care<br> consultation?</h2>
                            </div>
                        </div>
                        <div class="right">
                            <div class="btns-box">
                                <a class="btn-one" href="#"><span class="txt">Book Appointment<i
                                            class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <h2 class="aligncenter">Our <b class="primecolor">Doctors</b></h2>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <img src="{{url('public/assets/images/resources/doc.jpg')}}">
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="our-team">
                        <img src="{{url('public/assets/images/resources/doc.jpg')}}">
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Slogan Area-->

    <!--Start Choose Area-->
    {{-- <section class="choose-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="choose-left-box clearfix">
                        <div class="video-holder-box clearfix">
                            <img src="{{ url('public/assets/images/resources/video-gallery-bg.jpg') }}" alt="">
                            <div class="icon">
                                <a class="video-popup" title="Shrisharada Video Gallery"
                                    href="https://www.youtube.com/watch?v=p25gICT63ek">
                                    <span class="icon-play-button"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="choose-content-box">
                        <div class="sec-title">
                            <h2><span>Shrisharada</span> Why You Should Choose Our Services</h2>
                        </div>
                        <div class="inner-content">
                            <p>At Shrisharada, we specialize in ophthalmology (eye care) and ENT (ear, nose, and throat)
                                services, offering a range of treatments and personalized care.</p>
                            <p><b>Here's why you should consider choosing our services:</b></p>
                            <ul>
                                <li>Expertise in general eye checkups and contact lens prescriptions.</li>
                                <li>Diagnosis and treatment of common eye conditions and ENT issues.</li>
                                <li>Consultations for eye surgeries (availability may vary).</li>
                            </ul>
                        </div>

                        <div class="choose-tabs tabs-box">
                            <div class="tab-button-column clearfix">
                                <ul class="tab-buttons clearfix">
                                    <li data-tab="#eye-treatment" class="tab-btn active-btn">Eye Treatment</li>
                                    <li data-tab="#ent-treatment" class="tab-btn">ENT Treatment</li>
                                </ul>
                            </div>

                            <div class="choose-column clearfix">
                                <div class="inner">
                                    <div class="tabs-content">
                                        <!-- Tab content for Eye Treatment -->
                                        <div class="tab active-tab" id="eye-treatment">
                                            <div class="choose-tab-content-box">
                                                <div class="top-content">
                                                    <p>Details about the eye treatment services offered by Shrisharada.</p>
                                                </div>
                                                <div class="bottom-content">
                                                    <div class="image-box">
                                                        <img src="{{ url('public/assets/images/resources/choose1.png') }}"
                                                            alt="Eye Treatment Image">
                                                    </div>
                                                    <div class="text-box">
                                                        <ul>
                                                            <li>General eye checkups and contact lens prescriptions.</li>
                                                            <li>Diagnosis and treatment of common eye conditions.</li>
                                                            <li>Consultations for eye surgeries.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab content for ENT Treatment -->
                                        <div class="tab" id="ent-treatment">
                                            <div class="choose-tab-content-box">
                                                <div class="top-content">
                                                    <p>Details about the ENT treatment services offered by Shrisharada.</p>
                                                </div>
                                                <div class="bottom-content">
                                                    <div class="image-box">
                                                        <img src="{{ url('public/assets/images/resources/choose2.png') }}"
                                                            alt="ENT Treatment Image">
                                                    </div>
                                                    <div class="text-box">
                                                        <ul>
                                                            <li>Diagnosis and treatment of common ENT issues.</li>
                                                            <li>Details about specific ENT treatments available.</li>
                                                            <li>Availability of in-house diagnostic facilities for ENT.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="happy-patients-box">
                            <div class="icon">
                                <i class="icon-eye"></i>
                            </div>
                            <div class="title">
                                <h2>21,700</h2>
                                <span>Happy patients in 20 years</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section> --}}

    <!--End Choose Area-->

    <!--Start Testimonial style1 Area-->
    <section class="testimonial-style1-area">
        <div class="shape1 zoom-fade">
            <img src="{{ url('public/assets/images/shape/shape-2.png') }}" alt="Shape1">
        </div>
        <div class="shape2 float-bob">
            <img src="{{ url('public/assets/images/shape/shape-3.png') }}" alt="Shape2">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="top-title">
                        <div class="sec-title">
                            <h2><span>What</span> our customers are<br> talking about us</h2>
                        </div>
                        {{-- <div class="text">
                            <p>Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit sagitis leo sit.</p>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Start Single Testimonial Style1-->
                    <div class="single-testimonial-style1 text-center  wow fadeInUp" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="inner-content">
                            <div class="bg"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg.png)">
                            </div>
                            <div class="bg-overlay"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg-overlay.png)">
                            </div>
                            <div class="quote-icon">
                                <img class="main-icon" src="{{ url('public/assets/images/icon/quote-1.png') }}"
                                    alt="Quote Icon">
                                <div class="overlay-icon">
                                    <img src="{{ url('public/assets/images/icon/quote-2.png') }}" alt="Quote Icon">
                                </div>
                            </div>
                            <div class="text-box">
                                <p>After my LASIK surgery at Shrisharada, my vision has improved significantly. The staff
                                    was caring and professional throughout the entire process.</p>
                            </div>
                            <div class="img-box">
                                <img src="{{ url('public/assets/images/testimonial/tes1.png') }}" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="client-info-box">
                            <h3>David Cooper</h3>
                            <span>Customer</span>
                        </div>
                    </div>
                    <!--End Single Testimonial Style1-->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Start Single Testimonial Style1-->
                    <div class="single-testimonial-style1 text-center  wow fadeInDown" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="inner-content">
                            <div class="bg"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg.png)">
                            </div>
                            <div class="bg-overlay"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg-overlay.png)">
                            </div>
                            <div class="quote-icon">
                                <img class="main-icon" src="{{ url('public/assets/images/icon/quote-1.png') }}"
                                    alt="Quote Icon">
                                <div class="overlay-icon">
                                    <img src="{{ url('public/assets/images/icon/quote-2.png') }}" alt="Quote Icon">
                                </div>
                            </div>
                            <div class="text-box">
                                <p>The treatment I received for my sinusitis at Shrisharada was effective and the doctors
                                    were knowledgeable. I highly recommend their ENT services.</p>
                            </div>
                            <div class="img-box">
                                <img src="{{ url('public/assets/images/testimonial/tes2.png') }}" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="client-info-box">
                            <h3>Sara James</h3>
                            <span>Customer</span>
                        </div>
                    </div>
                    <!--End Single Testimonial Style1-->
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Start Single Testimonial Style1-->
                    <div class="single-testimonial-style1 text-center  wow fadeInUp" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="inner-content">
                            <div class="bg"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg.png)">
                            </div>
                            <div class="bg-overlay"
                                style="background-image: url(public/assets/images/pattern/single-testimonial-style1-bg-overlay.png)">
                            </div>
                            <div class="quote-icon">
                                <img class="main-icon" src="{{ url('public/assets/images/icon/quote-1.png') }}"
                                    alt="Quote Icon">
                                <div class="overlay-icon">
                                    <img src="{{ url('public/assets/images/icon/quote-2.png') }}" alt="Quote Icon">
                                </div>
                            </div>
                            <div class="text-box">
                                <p>Shrisharada provided excellent care for my cataract surgery. I'm grateful for their
                                    skilled surgeons and supportive staff.</p>
                            </div>
                            <div class="img-box">
                                <img src="{{ url('public/assets/images/testimonial/tes3.png') }}" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="client-info-box">
                            <h3>jo james</h3>
                            <span>Customer</span>
                        </div>
                    </div>
                    <!--End Single Testimonial Style1-->
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style1 Area-->

    <!--Start Partner Area-->
    {{-- <section class="partner-area">
        <div class="layer-outer"
            style="background-image: url(public/assets/images/parallax-background/partner-area-bg.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="partner-box">
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="{{ url('public/assets/images/brand/brand-1.png') }}"
                                    alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="{{ url('public/assets/images/brand/brand-2.png') }}"
                                    alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box marleft-minus">
                            <a href="#"><img src="{{ url('public/assets/images/brand/brand-3.png') }}"
                                    alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="{{ url('public/assets/images/brand/brand-4.png') }}"
                                    alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                        <!--Start Single Partner Logo Box-->
                        <div class="single-partner-logo-box">
                            <a href="#"><img src="{{ url('public/assets/images/brand/brand-5.png') }}"
                                    alt="Awesome Image"></a>
                        </div>
                        <!--End Single Partner Logo Box-->
                    </div>
                </div>
            </div>
        </div>

    </section> --}}
    <!--End Partner Area-->

    <!--Start Service Style2 Area-->
    {{-- <section class="service-style2-area">
        <div class="layer-outer-shape paroller"
            style="background-image: url(public/assets/images/shape/service-style2-area-shape.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="service-style2-left">
                        <div class="sec-title">
                            <h2 class="clrwhite"><span>Service</span> that’ll make you<br> see better future</h2>
                        </div>
                        <div class="row">
                            <!--Start Single Service Style2-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style2">
                                    <div class="title">
                                        <h5>Qualified Doctors</h5>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amt con sectetur notte elit sed do.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style2-->
                            <!--Start Single Service Style2-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style2">
                                    <div class="title">
                                        <h5>Qualified Doctors</h5>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amt con sectetur notte elit sed do.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style2-->
                            <!--Start Single Service Style2-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style2">
                                    <div class="title">
                                        <h5>Qualified Doctors</h5>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amt con sectetur notte elit sed do.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style2-->
                            <!--Start Single Service Style2-->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-service-style2">
                                    <div class="title">
                                        <h5>Qualified Doctors</h5>
                                    </div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amt con sectetur notte elit sed do.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Service Style2-->
                        </div>
                        <div class="bottom-box">
                            <div class="left">
                                <div class="any-question-box">
                                    <div class="icon">
                                        <span class="icon-customer-service"></span>
                                    </div>
                                    <div class="title">
                                        <span>Have any question?</span>
                                        <h3>Book an appointment</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="phone-number">
                                    <a href="tel:+11987654321">666 888 0000</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="service-style2-right">
                        <img src="{{ url('public/assets/images/services/service-style2-right-img.jpg') }}"
                            alt="Awesome Image">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--End Service Style2 Area-->

    <!--Start Blog Style1 Area-->
    {{-- <section class="blog-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="top-title">
                        <div class="sec-title">
                            <h2><span>Latest</span> news & updates<br> directly from blog</h2>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit sagitis leo sit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/blog/blog-v1-1.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="date-box">
                                <h5>20 June</h5>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Now you can see the better future</a></h3>
                            <ul class="meta-info">
                                <li><span class="icon-user thm-clr"></span><a href="#">Admin</a></li>
                                <li><span class="icon-comments thm-clr"></span><a href="#">2 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet ctetur cing elituspe ndisse cip <span>...</span></p>
                            </div>
                            <div class="bottom-box">
                                <div class="left">
                                    <a class="readmore" href="#">Read More</a>
                                </div>
                                <div class="right">
                                    <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single blog Style1-->
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/blog/blog-v1-2.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="date-box">
                                <h5>15 June</h5>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">Protect your eyes from dust and disease</a>
                            </h3>
                            <ul class="meta-info">
                                <li><span class="icon-user thm-clr"></span><a href="#">Admin</a></li>
                                <li><span class="icon-comments thm-clr"></span><a href="#">2 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet ctetur cing elituspe ndisse cip <span>...</span></p>
                            </div>
                            <div class="bottom-box">
                                <div class="left">
                                    <a class="readmore" href="#">Read More</a>
                                </div>
                                <div class="right">
                                    <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single blog Style1-->
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/blog/blog-v1-3.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="date-box">
                                <h5>12 June</h5>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="blog-single.html">We’re ready to enhance your vision</a></h3>
                            <ul class="meta-info">
                                <li><span class="icon-user thm-clr"></span><a href="#">Admin</a></li>
                                <li><span class="icon-comments thm-clr"></span><a href="#">2 Comments</a></li>
                            </ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet ctetur cing elituspe ndisse cip <span>...</span></p>
                            </div>
                            <div class="bottom-box">
                                <div class="left">
                                    <a class="readmore" href="#">Read More</a>
                                </div>
                                <div class="right">
                                    <a class="btn-style3" href=""><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Single blog Style1-->

            </div>
        </div>
    </section> --}}
    <!--End Blog Style1 Area-->

    <!--Start Slogan Style2 Area-->
    <section class="slogan-style2-area">
        <div class="icon-holder">
            <img src="{{ url('public/assets/images/icon/icon.png') }}" alt="Icon">
        </div>
        <div class="outer-container">
            <div class="row">
                <!--Start Slogan Single Box-->
                <div class="col-xl-6">
                    <div class="slogan-single-box">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ url('public/assets/images/resources/slogan-single-1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="overlay-content">
                                <h2>We only give best care<br> to your eyes.</h2>
                                <div class="btns-box">
                                    <a class="btn-one gray" href="https://wa.me/+919400308374?text=Hi">
                                        <span class="txt">Book Appointment<i class="fa fa-angle-double-right round"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Slogan Single Box-->
                <!--Start Slogan Single Box-->
                <div class="col-xl-6">
                    <div class="slogan-single-box">
                        <div class="img-holder">
                            <div class="inner gray-bg">
                                <img src="{{ url('public/assets/images/resources/slogan-single-2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="overlay-content">
                                <h2>Best lasik clinic helping<br> your visions.</h2>
                                <div class="btns-box">
                                    <a class="btn-one"href="https://wa.me/+919400308374?text=Hi">
                                        <span class="txt">Book Appointment<i class="fa fa-angle-double-right round"
                                                aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Slogan Single Box-->
            </div>
        </div>
    </section>
    <!--End Slogan Style2 Area-->
@endsection
