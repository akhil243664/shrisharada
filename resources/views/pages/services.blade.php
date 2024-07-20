@extends('layout.app')
@section('content')
    <!--Start Services details Area-->
    <section class="services-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details-content">
                        <div class="services-details-image1">
                            <img src="{{ asset($data['image']) }}" alt="Awesome Image">
                            <div class="icon"><span class="icon-glasses"></span></div>
                        </div>
                        <div class="services-details-text1">
                            <h2>{{ $data['title'] }}</h2>
                            <p>{{ $data['description'] }}</p>
                        </div>
                        <div class="services-details-text2">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="img-box">
                                        <img src="{{ asset('public/assets/images/services/services-details-small.jpg') }}"
                                            alt="Awesome Image">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="text-box">
                                        <h3>Our Surgical Benefits</h3>
                                        <p>We offer a variety of benefits to ensure a smooth surgical experience:</p>
                                        <ul>
                                            @foreach ($data['benefits'] as $benefit)
                                                <li>{{ $benefit }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-details-faq-box">
                            <div class="accordion-box">
                                @foreach ($data['faqs'] as $faq)
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>{{ $faq['question'] }}</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>{{ $faq['answer'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="services-details-text3">
                            <h2>Ensuring the Best Care for Your Eyes and Ears</h2>
                            <p>At Shri Sharada Hospital, we prioritize your eye and ear health with comprehensive surgical
                                and non-surgical treatments. Our dedicated team is here to provide you with the best
                                possible care and support throughout your treatment journey.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="services-details-sidebar">
                        <div class="single-sidebar1">
                            <div class="title">
                                <h3>Categories</h3>
                            </div>
                            <div class="page-links">
                                <ul>
                                    <li class="{{ request()->is('services/surgical-procedure') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'surgical-procedure') }}">Surgical Procedure</a>
                                    </li>
                                    <li class="{{ request()->is('services/all-llaser-lasik') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'all-laser-lasik') }}">All Laser Lasik</a></li>
                                    <li class="{{ request()->is('services/cornea-glaucoma') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'cornea-glaucoma') }}">Cornea & Glaucoma</a>
                                    </li>
                                    <li class="{{ request()->is('services/eye-surgery') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'eye-surgery') }}">Eye Surgery</a></li>
                                    <li class="{{ request()->is('services/ent-surgery') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'ent-surgery') }}">ENT Surgery</a></li>
                                    <li class="{{ request()->is('services/eye-test-care') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'eye-test-care') }}">Eye Test Care</a></li>
                                    <li class="{{ request()->is('services/contact-lenses') ? 'active' : '' }}"><a
                                            href="{{ route('services.show', 'contact-lenses') }}">Contact Lenses</a></li>
                                    <li
                                        class="{{ request()->is('services/advanced-cataract-surgeries') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'advanced-cataract-surgeries') }}">Advanced
                                            Cataract Surgeries</a></li>
                                    <li class="{{ request()->is('services/retina-clinic') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'retina-clinic') }}">Retina Clinic</a>
                                    </li>
                                    <li class="{{ request()->is('services/glaucoma-clinic') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'glaucoma-clinic') }}">Glaucoma Clinic</a>
                                    </li>
                                    <li class="{{ request()->is('services/oculoplasty-services') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'oculoplasty-services') }}">Oculoplasty
                                            Services</a>
                                    </li>
                                    <li
                                        class="{{ request()->is('services/pediatric-ophthalmology-services') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'pediatric-ophthalmology-services') }}">Pediatric
                                            Ophthalmology Services</a>
                                    </li>
                                    <li class="{{ request()->is('services/low-vision-rehabilitation') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'low-vision-rehabilitation') }}">Low Vision
                                            Rehabilitation</a>
                                    </li>
                                    <li class="{{ request()->is('services/emergency-eye-care') ? 'active' : '' }}">
                                        <a href="{{ route('services.show', 'emergency-eye-care') }}">Emergency Eye Care</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar2"
                            style="background-image: url('{{ asset('public/assets/images/sidebar/single-sidebar2-bg.jpg') }}')">
                            <a href="https://wa.me/+919400308374?text=Hi">Book Appointment</a>
                            <h2>We protect<br> your eye<br> vision</h2>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Services details Area-->

    <!--Start Slogan Area-->
    <section class="slogan-area"
        style="background-image: url('{{ asset('public/assets/images/parallax-background/slogan-area-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slogan-content">
                        <div class="left paroller">
                            <div class="title">
                                <h2>Are you looking for an eye care<br> consultation?</h2>
                            </div>
                        </div>
                        <div class="right">
                            <div class="btns-box">
                                <a class="btn-one" href="https://wa.me/+919400308374?text=Hi"><span class="txt">Book
                                        Appointment<i class="fa fa-angle-double-right round"
                                            aria-hidden="true"></i></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slogan Area-->

    <!--Start subscribe Area-->
    <section class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="left pull-left">
                        <div class="subscribe-social-links">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="right pull-right">
                        <div class="subscribe-content-box clearfix">
                            <div class="subscribe-title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="subscribe-box">
                                <form class="subscribe-form black_ver" action="#">
                                    <input type="email" name="email" placeholder="Your email address">
                                    <button type="submit"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End subscribe Area-->
@endsection
