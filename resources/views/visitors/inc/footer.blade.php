<footer>
    <!--Footer top -->
    <div class="footer-top overlay-2 section-back-image-2"
        data-background="{{ config('app.url') }}/assets/img/bg/counter-bg.jpg">
        <div class="auto-container">
            <div class="row">
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>About Prabha</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="{{ route('about-prabha') }}">About Prabha</a></li>
                        <li><a href="{{ route('director-desk') }}">Director's Desk</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('patients-feedback') }}">Patients
                                Testimonial</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('faqs') }}">Faq's</a></li>

                    </ul>

                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Departments</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">

                        @php
                            $menu_dep = \App\Models\Departments::where('status', 1)->orderBy('orders', 'ASC')->get();
                        @endphp

                        @foreach ($menu_dep as $row)
                            <li><a href="{{ route('department', $row->slug) }}">{{ $row->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Patient Corner</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="{{ route('doctors-appointment') }}">Doctors Appointment</a></li>

                    <li><a href="{{ route('facilities') }}" >Facilities</a></li>
                     <li><a href="{{ route('our-surgeries') }}" >Our Surgeries</a></li>
                      <li><a href="{{ route('contact') }}" >Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Reach to us</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="#"><i class="icofont icofont-map-marker"></i> Nh-2 , geeta Mandir , mathura
                                bypass, road, Sikandra Agra, Uttar Pradesh 282007</a></li>
                        <li><a href="#"><i class="icofont icofont-phone "></i> +91 72520 00343</a></li>
                        <li><a href="#"><i class="icofont icofont-phone"></i> +91 90125 16000</a></li>
                    </ul>
                    <div class="footer-section-title col-12 p-0 mt-4 mb-4">
                        <h5>Get Connected</h5>
                    </div>
                    <!-- end widget title -->
                    <div class="footer-social">
                        <ul>
                            <li><a href="https://www.facebook.com/Prabha.nh2" target="_blank"><i
                                        class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/prabha_hospital/?hl=en" target="_blank"><i
                                        class="icofont icofont-social-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
                <!--          <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">-->
                <!--              <div class="footer-section-title col-12 p-0 mb-4">-->
                <!--                      <h5>Our Associates</h5>-->
                <!--                  </div>-->
                <!--<ul class="quick-link-list">-->
                <!--	<li><a href="#">News and Events</a></li>-->
                <!--                      <li><a href="#">CME and Conferences</a></li>-->
                <!--                      <li><a href="#">Organ Transplant Authorization</a></li>-->
                <!--                      <li><a href="#">BMW Report</a></li>-->
                <!--                      <li><a href="#">About Prabha</a></li>-->
                <!--                      <li><a href="#">Quality & Safety</a></li>-->
                <!--                      <li><a href="#">Contact Us</a></li>-->
                <!--                      <li><a href="#">Sitemap</a></li>-->
                <!--                      <li><a href="#">Career</a></li>-->
                <!--                      <li><a href="#">Pay Online</a></li>-->
                <!--                      <li><a href="#">Virtual tour</a></li>-->
                <!--</ul>-->

                <!--              </div>-->
                <!--          </div>-->
            </div>
        </div>
        <div class="copyright">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12 copyright-text">
                        <p>Copyright © 2024 Prabha hospital | All Rights Reserved | Designed and Developed By <a href="https://svtindia.in" target="_blank">SVT India</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 footer-menu">
                        <ul>
                            <!--<li><a href="#">Privacy</a> </li>-->
                            <!--<li><a href="#">Cookies</a> </li>-->
                            <!--<li><a href="#">Terms and Conditions</a> </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- END FOOTER -->
<a href="https://api.whatsapp.com/send?phone=+917252000343&amp;text=Hello!"
    style="position: fixed;
bottom: 54px ;
left: 0;
padding: 8px 16px;
z-index: 100;">
    <img class="img-fluid" src="{{ config('app.url') }}/assets/img/whatsapp.png" alt=""
        style="    max-height: 66px;">
</a>

<a href="{{ route('doctors-appointment') }}"
    style="position: fixed;
bottom: 0;
left: 0;
padding: 8px 16px;
z-index: 100;">
    <img class="img-fluid" src="{{ config('app.url') }}/assets/img/book-appointment-button.png" alt=""
        style="    max-height: 50px;">
</a>
