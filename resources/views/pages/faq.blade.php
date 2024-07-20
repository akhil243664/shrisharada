@extends('layout.app')
@section('content')
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(public/assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="layer-outer-icon" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
        <img src="{{url('public/assets/images/icon/icon-breadcrumb.png')}}" alt="Icon">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">FAQs</li>
                        </ul>    
                    </div>
                    
                    <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h2>FAQs</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Faq Content Area-->
<section class="faq-content-area faq-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="faq-content-box">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What are the common symptoms of eye diseases?</h4></div>
                            <div class="accord-content">
                                <p>Symptoms can include blurred vision, eye pain, redness, floaters, and sensitivity to light.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>How often should I get my eyes checked?</h4></div>
                            <div class="accord-content">
                                <p>It is recommended to have an eye exam every one to two years, depending on age and risk factors.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What are the treatment options for cataracts?</h4></div>
                            <div class="accord-content">
                                <p>Cataracts are typically treated with surgery to remove the cloudy lens and replace it with an artificial one.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>How can I prevent ear infections?</h4></div>
                            <div class="accord-content">
                                <p>Keep ears dry, avoid inserting objects into the ear canal, and treat any allergies or colds promptly.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What causes hearing loss and how can it be treated?</h4></div>
                            <div class="accord-content">
                                <p>Causes include aging, exposure to loud noise, infections, and genetics. Treatments range from hearing aids to surgery.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What is LASIK surgery and who is a good candidate?</h4></div>
                            <div class="accord-content">
                                <p>LASIK is a laser eye surgery to correct vision. Good candidates are those with stable vision and no major eye issues.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>How can I protect my eyes from digital strain?</h4></div>
                            <div class="accord-content">
                                <p>Follow the 20-20-20 rule: every 20 minutes, look at something 20 feet away for 20 seconds, and use anti-glare screens.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What are the signs of an ENT infection that requires medical attention?</h4></div>
                            <div class="accord-content">
                                <p>Persistent pain, fever, swelling, hearing loss, or discharge from the ear or nose are signs that need medical evaluation.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>How do allergies affect the eyes and ENT system?</h4></div>
                            <div class="accord-content">
                                <p>Allergies can cause symptoms like itchy, watery eyes, sneezing, congestion, and sinus pressure.</p>
                            </div>
                        </div>
                        
                        <div class="accordion accordion-block bordernone">
                            <div class="accord-btn"><h4>What should I do if I experience sudden vision loss or eye injury?</h4></div>
                            <div class="accord-content">
                                <p>Seek immediate medical attention as these can be signs of serious conditions requiring urgent care.</p>
                            </div>
                        </div>
                        
                        <!--End single accordion box-->
                    </div> 
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Faq Content Area-->

<!--Start Emergency Contact Area-->
<section class="emergency-contact-area" style="background-image: url(public/assets/images/parallax-background/emergency-contact-area-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="emergency-contact-number">
                    <div class="icon">
                        <span class="icon-customer-service"></span>
                    </div>
                    <div class="title">
                        <h2>For Emergency Cases</h2>
                        <a href="tel:+919400308374">+91 94003 08374</a>
                    </div>    
                </div>
            </div>
            <div class="col-xl-4">
                <div class="emergency-contact-text">
                    <p>Dedicated eye specialists delivering expert care and advanced treatments for all your vision needs.</p>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="emergency-contact-btns-box">
                    <a class="btn-one" href="https://wa.me/+919400308374?text=Hi"><span class="txt">Book Appointment<i class="fa fa-angle-double-right round" aria-hidden="true"></i></span></a>
                </div>    
            </div>    
        </div>
    </div>
</section>
<!--End Emergency Contact Area-->

<!--Start Contact Form Style1 Area-->
<section class="contact-form-style1-area">
    <div class="shape" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
        <img class="float-bob-y" src="{{url('public/assets/images/shape/shape-4.png')}}" alt="Shape">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="contact-form home-p">
                    <div class="sec-title">
                        <h2><span>We love</span> to hear from our<br> customers</h2>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form2" action="assets/inc/sendmail.php" method="post">
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
            
            <div class="col-xl-5">
                <div class="contact-image-box clearfix" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="300">
                    <img src="{{url('public/assets/images/resources/contact-image.jpg')}}" alt="Awesome Image">
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Contact Form Style1 Area-->
@endsection