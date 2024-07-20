@extends('layout.app')
@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(public/assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="layer-outer-icon" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <img src="public/assets/images/icon/icon-breadcrumb.png" alt="Icon">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>    
                    </div>
                    
                    <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>Contact</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Contact Form Style1 Area-->
<section class="contact-form-style1-area contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact-p-contact-info-box">
                    <div class="sec-title">
                        <h2><span>We love</span> to hear from<br> our customers</h2>
                    </div>
                    <div class="inner-content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text">
                                    <a href="tel:+91940030837">+91 94003 08374</a>
                                    <a href="tel:+91940030837">Mon - Sat: 9:00am to 6:00pm</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <a href="mailto:hello@shrisharada.com">hello@shrisharada.com</a><br>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin-1"></span>
                                </div>
                                <div class="text">
                                    <p>Infront of Assumption College of Nursing, Stadium Road, Sultan Bathery, Kerala 673592</p>
                                </div>
                            </li>
                            
                        </ul>    
                    </div>    
                </div>  
            </div>
            <div class="col-xl-7">
                <div class="contact-form contact-page">
                    <form id="contact-form" name="contact_form" class="default-form2" action="" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box"> 
                                    <input type="text" name="form_name" value="" placeholder="Your name" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="text" name="form_phone" value="" placeholder="Phone number">
                                </div>     
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="input-box"> 
                                    <input type="email" name="form_email" value="" placeholder="Email address" required="">
                                </div>
                                <div class="input-box"> 
                                    <input type="text" name="form_subject" value="" placeholder="Subject">
                                </div>      
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12"> 
                                <div class="input-box">    
                                    <textarea name="form_message" placeholder="Write message" required=""></textarea>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">Send Massage<i class="fa fa-angle-double-right round" aria-hidden="true"></i></span>
                                    </button>    
                                </div>
                            </div>
                        </div> 
                         
                    </form>
                </div>
                    
            </div>
            
            
            
        </div>
    </div>
</section>
<!--End Contact Form Style1 Area-->

@endsection