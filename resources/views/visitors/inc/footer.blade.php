<footer>
    <!--Footer top -->
    <div class="footer-top overlay-2 section-back-image-2"
        data-background="{{ config('app.url') }}/assets/img/bg/counter-bg.jpg">
        <div class="auto-container">
            <div class="row">
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Centres of Excellence</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="{{ route('orthopedic') }}">Orthopaedics</a></li>
                        <li><a href="{{ route('urology') }}">Nephrology &amp; Urology</a></li>
                        <li><a href="{{ route('cardiology') }}">Cardiology</a></li>
                        <li><a href="{{ route('gastroenterology') }}">Gastroenterology</a></li>
                        <li><a href="{{ config('app.url') }}">Spine Surgery</a></li>
                        <li><a href="{{ route('plasticsurgery') }}">Plastic Surgery</a></li>
                        <li><a href="{{ route('neurology') }}">Neurology &amp; Neurosurgery</a>
                        </li>

                    </ul>

                </div>
                <!-- End Widget -->
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Medical Facilities</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">

                        <li><a href="{{ route('icu') }}">ICU</a></li>
                        <li><a href="{{ route('nicu') }}">NICU</a></li>
                        <li><a href="{{ route('our-surgeries') }}">Surgery Department</a>
                        </li>
                        <li><a href="#">Gastrointestinal
                                Surgery</a></li>
                        <li><a href="#">Pharmacy Services</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>Patients</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ config('app.url') }}/contact">Emergency Service</a></li>
                        <li><a href="{{ config('app.url') }}/contact">Patient Support Service</a></li>
                        {{-- <li><a href="{{ config('app.url') }}/service/international-patient">International
                                Patients</a></li> --}}
                    </ul>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-5 mb-5 footer-widget">
                    <div class="footer-section-title col-12 p-0 mb-4">
                        <h5>About Prabha</h5>
                    </div>
                    <!-- end widget title -->
                    <ul class="quick-link-list">

                        <li><a href="{{ route('about-prabha') }}">About Prabha</a></li>
                        <li><a href="{{ route('about-doctor')}}">About Doctors</a></li>
                        <li><a href="{{ route('director-desk') }}">Director's Desk</a></li>
                    </ul>
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
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 copyright-text">
                        <p>Copyright © 2024 Prabha hospital | All Rights Reserved</p>
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
bottom: 0;
left: 0;
padding: 8px 16px;
z-index: 100;">
    <img class="img-fluid" src="{{ config('app.url') }}/assets/img/whatsapp.png" alt=""
        style="    max-height: 66px;">
</a>
