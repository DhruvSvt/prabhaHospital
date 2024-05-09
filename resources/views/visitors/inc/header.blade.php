<header class="main-header header-1">
    <!-- START TOP AREA -->
    <div class="top-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="header-social m-0">
                        <ul>
                            <li><a href="#0">Follow Us:</a></li>
                           <li><a href="https://www.facebook.com/Prabha.nh2"><i class="icofont icofont-social-facebook"></i></a></li>
                           <li><a href="https://www.instagram.com/prabha_hospital/?hl=en"><i class="icofont icofont-social-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8 col-6">
                    <div class="info-menu">
                        <ul>

                            <li><a href="{{ route('about-prabha') }}">About Prabha</a></li>
                            <li><a href="{{ route('contact') }}">Contact </a></li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END TOP AREA -->
    <!-- START LOGO AREA -->
    <div class="logo-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-7 ">
                    <div class="logo mb-0">
                        <a href="{{ route('home') }}">
                           <img class="img-fluid1" src="{{ config('app.url') }}/assets/img/logo/logo.png" alt="Prabha Hospital">
                        </a>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 d-lg-block d-md-none d-sm-none d-none ">
                    <div class="header-info-box">
                       <div class="header-info-icon"><i class="icofont icofont-van"></i></div>
                        <p>Emergency number</p>
                        <h6>+91 72520 00343</h6>
                    </div>
                    <div class="header-info-box">
                        <div class="header-info-icon"><i class="icofont icofont-doctor"></i></div>
                        <p><a href="{{ route('contact') }}">24x7 Emergency <br> Trauma Care</p>
                        {{-- <h6><a href="tel:">+91 90125 16000</h6> --}}
                    </div>
                    <div class="header-info-box">
                        <div class="header-info-icon"><i class="icofont icofont-calendar"></i></div>
                        <p>Appointment number</p>
                        <h6>+91 90125 16000</h6>
                    </div>
                    {{-- <div class="header-info-box">
                        <a class="header-quote-btn" href="{{ route('contact') }}">Contact</a>
                    </div> --}}
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
    <!-- END LOGO AREA -->
    <!-- START NAVIGATION AREA -->
    <div class="sticky-menu">
        <div class="mainmenu-area">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12 d-lg-block d-md-none d-sm-none d-none ">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                            <ul class="navbar-nav">
                                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li class="dropdown">
                                    <a href="#0" class="nav-link">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('about-prabha') }}">About Prabha</a></li>
                                        {{-- <li><a href="{{ route('about-doctor') }}">About Doctors</a></li> --}}
                                        <li><a href="{{ route('director-desk') }}">Director's Desk</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                                <li class="dropdown">
                                    <a href="{{ config('app.url') }}/service/departments" class="nav-link">Doctors</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('ourdoctors') }}">Our Doctors</a></li>
                                        <li><a href="{{ route('urology') }}">Doctors Appointment</a></li>
                                        {{-- <li><a href="{{ route('gastroenterology') }}">Protect from COVID-19</a></li> --}}
                                        </ul>
                                </li>
                                <li>
                                    <a href="{{ route('our-surgeries') }}" class="nav-link">Our Surgeries</a>


                                </li>
                                {{-- <li><a href="{{ route('patients') }}" class="nav-link">International patients</a></li> --}}
                                <li>
                                    <a href="{{ route('facilities') }}" class="nav-link">Facilities</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ config('app.url') }}/service/departments" class="nav-link">Departments</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('neurology') }}">Neurology</a></li>
                                        <li><a href="{{ route('urology') }}">Urology</a></li>
                                        <li><a href="{{ route('gastroenterology') }}">Gastroenterology</a></li>
                                        <li><a href="{{ route('obstetrics and gynecology') }}">Obstetrics and Gynecology</a></li>
                                        <li><a href="{{ route('icu') }}">ICU</a></li>
                                        <li><a href="{{ route('nicu') }}">NICU</a></li>
                                        <li><a href="{{ route('surgery') }}">Surgery Department</a></li>
                                        <li><a href="#">Gastrointestinal Surgery</a></li>
                                        <li><a href="#">Pharmacy Services</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ config('app.url') }}/service/departments" class="nav-link">Patients Testimonial</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Patients Videos</a></li>
                                        <li><a href="{{ route('patients-feedback') }}">Patients Feedback</a></li>
                                    </ul>
                                </li>
                                &nbsp;

                                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                                {{-- <li><a href="#" class="nav-link">FAQ</a></li> --}}


                                <!--<li class="dropdown"><a href="services.html" class="nav-link">Services</a>-->
                                <!--	<ul class="dropdown-menu">-->
                                <!--		<li><a href="services.html">Our All Services</a></li>-->
                                <!--		<li><a href="single-service.html">Accident & Emergency</a></li>-->
                                <!--		<li><a href="single-service.html">Health checks</a></li>-->
                                <!--		<li><a href="single-service.html">Home Care</a></li>-->
                                <!--		<li><a href="single-service.html">Diabetes & Endocrinology</a></li>-->
                                <!--	</ul>-->
                                <!--</li>	-->
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            <!--- END CONTAINER -->
        </div>
        <!-- END NAVIGATION AREA -->
        <!-- MOBILE-MENU-AREA START -->
        <div class="mobile-menu-area d-lg-none d-md-block d-sm-block d-block">
            <div class="col-md-9">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="navbar-nav">
                                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li><a href="{{ route('about-prabha') }}" class="nav-link">About Prabha</a></li>
                                        <li><a href="{{ route('about-doctor') }}" class="nav-link">About Doctors</a></li>
                                        <li><a href="{{ route('director-desk') }}" class="nav-link">Director's Desk</a></li>
                                <li><a href="{{ route('our-surgeries') }}" class="nav-link">Our Surgeries</a></li>
                                <li><a href="{{ config('app.url') }}/service/international-patient" class="nav-link">International patients</a></li>
                                <li><a href="{{ config('app.url') }}" class="nav-link">Facilities</a></li>
                                <li><a href="{{ config('app.url') }}/contact" class="nav-link">Contact</a></li>
                                {{-- <li><a href="{{ config('app.url') }}/gallery" class="nav-link">Gallery</a></li> --}}
                                <!--<li><a href="blog.html" class="nav-link">Blog</a>-->
                                <!--	<ul>-->
                                <!--		<li><a href="blog.html">Blog</a></li>-->
                                <!--		<li><a href="blog-single.html">Blog Single</a></li>-->
                                <!--	</ul>-->
                                <!--</li>	-->
                            </ul>
                        </nav>
                    </div>
              </div>
        </div>
        <!-- MOBILE-MENU-AREA END -->
    </div>
</header>
