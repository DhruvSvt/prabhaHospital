@extends('visitors.layouts.visitorsApp',['title' => 'Contact'])
@section('content')
<section class="section-padding bg-color">
    <div class="auto-container mt-1 mb-2 text-center">
        <h1 class="heading">Contact us</h1>
    </div>
</section>
<!-- GOOGLE MAP -->

<div class="gmap_canvas">

    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.7766731303784!2d77.9581455325609!3d27.212254334683532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477c8b35d9d13%3A0xb5a9779d87ba7595!2sPrabha%20hospital%20and%20Trauma%20Center!5e0!3m2!1sen!2sin!4v1654162025212!5m2!1sen!2sin"></iframe>
</div>
<!-- END GOOGLE MAP -->

<!-- START FAQ SECTION-->
<section id="contact" class="section-padding">
    <div class="auto-container">
        <div class="row">

            <div class="col-lg-12 mt-md-0 mt-sm-3 mt-3">
                <div class="contact-title" style="background-color: #06a6a1;padding-top: 14px;">
                    <h4 class="text-center" style="color: white">FAQ</h4>

                    <hr>
                </div>

                    </div>
                  </div>
                </div>
<main>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-item-header">
                <span class="accordion-item-header-title">● What are the visiting hours for patients at Prabha Hospital?</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down accordion-item-header-icon">
                    <path d="m6 9 6 6 6-6" />
            </svg>
            </div>
            <div class="accordion-item-description-wrapper">
                <div class="accordion-item-description">
                    <hr>
                    <p>Yes, Prabha Hospital, renowned for its state-of-the-art emergency services, has a fully-equipped emergency department
                    that operates 24/7.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                <span class="accordion-item-header-title">● Does Prabha Hospital have a pharmacy on-site, making it convenient for patients?</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down accordion-item-header-icon">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </div>
            <div class="accordion-item-description-wrapper">
                <div class="accordion-item-description">
                    <hr>
                    <p>Yes, Prabha Hospital, known for its patient-centric approach, has a pharmacy on-site for the convenience of patients.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                <span class="accordion-item-header-title">● Are there parking facilities available at Prabha Hospital, known for its outstanding healthcare services?</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down accordion-item-header-icon">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </div>
            <div class="accordion-item-description-wrapper">
                <div class="accordion-item-description">
                    <hr>
                    <p>Yes, Prabha Hospital, acknowledged for its exceptional healthcare facilities, has ample parking facilities for patients
                    and visitors.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                <span class="accordion-item-header-title">● Does Prabha Hospital, considered one of the best hospitals in Agra, accept health insurance?</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down accordion-item-header-icon">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </div>
            <div class="accordion-item-description-wrapper">
                <div class="accordion-item-description">
                    <hr>
                    <p>Yes, Prabha Hospital, counted among the best hospitals in Agra, accepts most major health insurance plans. Please check
                    with your insurance provider for coverage details.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-item-header">
                <span class="accordion-item-header-title">● What services does Prabha Hospital offer?</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down accordion-item-header-icon">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </div>
            <div class="accordion-item-description-wrapper">
                <div class="accordion-item-description">
                    <hr>
                    <p>Prabha Hospital, known for its comprehensive healthcare services, offers a wide range of medical services including.<a href="{{ route('facilities') }}">&nbsp;Our facilities</a></p>
                </div>
            </div>
        </div>
    </div>
</main>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END FAQ SECTION -->

<!-- START CONTACT SECTION -->
<section id="contact" class="section-padding">
    <div class="auto-container">
        <div class="row">

            <div class=" col-lg-12 mt-md-0 mt-sm-3 mt-3">
                <div class="contact-title" style="background-color: #06a6a1; padding-top: 14px; ">
                    <h4 class="text-center" style="color: white">Get In Touch</h4>

                    <hr>
                </div>
                <div class="address-box mt-4">
                    <div class="single-address-box mb-3">
                        <span>Address:</span>
                        <p> Nh-2 , geeta Mandir , mathura bypass, road, Sikandra <br> Agra, Uttar Pradesh 282007 </p>
                    </div>
                    <div class="single-address-box mb-3">
                        <span>Emergency number</span>
                        <p>+91 72520 00343</p>
                    </div>
                    <div class="single-address-box mb-3">
                        <span>Appointment number</span>
                        <p>+91 90125 16000</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END CONTACT SECTION -->

<!-- SINGLE DOCTOR PROMO -->
<div class="single-doc-promo bg-theme mt-lg-5 mt-md-3 mt-sm-3 mt-3"  style="background: #06a6a15c!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="single-doc-promo-box-img">
                    <img class="img-fluid" src="assets/img/bg/doc-promo.png" alt="">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="single-doc-promo-box">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="single-doc-promo-content">
                                 <h5>If you need any Medical help</h5>
                                 <p>Feel free to call us 24hr emergency number</p>
                                 <a href="tel:+917252000343"><i class="icofont icofont-phone"></i>+91 72520 00343</a>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-4">
                            <a href="tel:+917252000343" class="single-doc-promo-btn fadeInUp animated">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SINGLE DOCTOR PROMO -->
<br>
@endsection
