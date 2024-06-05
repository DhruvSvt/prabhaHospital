@extends('visitors.layouts.visitorsApp',['title' => 'HOME'])
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ config('app.url') }}\assets\img\bg\banner1.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ config('app.url') }}/assets/img/bg/banner3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ config('app.url') }}/assets/img/bg/WEB BANNER-02.jpg"
                alt="First slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- <section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Services We Offer</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">

                <div class="col mb-5 ">
                    <a href="{{ route('cardiology') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-1.png" class="mb-5">
                        <h6 class="mb-0">Cardiology</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('orthopedic') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-2.png" class="mb-5">
                        <h6 class="mb-0">Orthopedics</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ config('app.url') }}/service/d_gynaecology">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-3.png" class="mb-5">
                        <h6 class="mb-0">Gynaecology</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('nicu') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-4.png" class="mb-5">
                        <h6 class="mb-0">NICU/PICU</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('neurology') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-5.png" class="mb-5">
                        <h6 class="mb-0">Neurology</h6>
                    </a>
                </div>


                <div class="col mb-5 ">
                    <a href="{{ route('icu') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-6.png" class="mb-5">
                        <h6 class="mb-0">ICU</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('gastroenterology') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-7.png" class="mb-5">
                        <h6 class="mb-0">Gastrology</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('surgries') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-8.png" class="mb-5">
                        <h6 class="mb-0">Surgery</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('urology') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-9.png" class="mb-5">
                        <h6 class="mb-0">Neprology &amp; Urology</h6>
                    </a>
                </div>
                <div class="col mb-5 ">
                    <a href="{{ route('plasticsurgery') }}">
                        <img src="{{ config('app.url') }}/assets/img/deps/icon-10.png" class="mb-5">
                        <h6 class="mb-0">Plastic Surgery</h6>
                    </a>
                </div>
                <div class="col-lg-1 col-sm-6 mb-5 ">
                </div>
            </div>
        </div>
    </div>
</section> --}}
<style>
        .Surgeries img {
    box-shadow: 0 1px 6px 0 rgb(197 197 197 / 26%);
    background: #fff;
    border-radius: 10px;
    width: 139px !important;
    background: transparent;
    margin: auto;
}
    </style>
<section id="doctor" class="section-padding bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Our<span> Specialities</span></h3>
                        <span class="line"></span>

                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="row">
				<div class="team-slider Surgeries owl-carousel owl-theme">

				<div class="col">
				<a href="{{ route('piles') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/piles.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Piles</p>
				</a>
			</div>
            <div class="col">
				<a href="{{ route('fissure') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/fissure.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Fissure</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('fistula') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/fistula.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Fistula</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('circumcision') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/circumcision.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Circumcision</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('varicoseveins') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/varicose-veins.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Varicose Veins</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('gynecological') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gynaecology.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Gynaecology</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('ent') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/ent.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">ENT</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('gallstone') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gallstone.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Gallstone</p>
				</a>
			</div>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>

<section id="about" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div
                class="col-lg-7 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">

                <h4 class="mt-1">Why Choose <br>Prabha Healthcare?</h4>

                <p>Prabha Hospital And Trauma Centre( A Unit Of MLP Advance Healthcare Systems Pvt. Ltd.) in no time
                    became one of the best hospitals in town working under the guidance of Dr. B K Singh the
                    founder. We have all highly advanced facilities and qualified & trained nursing staff in all
                    wards having 110 beds including ICU, CCU, PICU, NICU, Emergency, Trauma and BURN
                    Unit (with a provision of expansion up to 150 beds). </p>

                <div class="about-us-into-features mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-us-into-features-text">
                                <h5><i class="icofont icofont-paralysis-disability"></i> &nbsp;Nursing</h5>
                                <p>Our nursing protocols are defined by blending the most ethical and advanced of
                                    Indian nursing practices.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-us-into-features-text">
                                <h5><i class="icofont icofont-check-circled"></i> &nbsp;Quality</h5>
                                <p>Quality at Prabha covers various aspects of patient care, patient safety, care
                                    coordination and patient engagement. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col -->
            <div class="col-lg-5">
                <img src="{{ config('app.url') }}/assets/img/svg/157A7113-min.png" class="img-fluid">
            </div>
            <!-- end col -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>

<!-- END ABOUT SECTION -->

<section id="about" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Prabha Facilities</h4>
                    <p>For medical services to all critical ill patients we have the critical care units</p>

                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mt-4">
            <div class="service-slider owl-carousel owl-theme">
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-icu"></i>
                        <h5>Intensive Care Unit (ICU)</h5>
                        <p>It is being operated under the close monitoring of two intensive and 1:1 patient – staff
                            ratio round the clock. Each bed is covered with centralized oxygen, air & suction with
                            multi-para monitor , infusion pump, volumetric pump and emergency drugs.</p>

                    </div>
                </div>
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-bed-patient"></i>
                        <h5>Pediatric Intensive Care Unit (PICU)</h5>
                        <p>Specific unit for critically ill child is setup under the close monitoring of intensive
                            sits,
                            pediatrician and 2:1 patient – staff ratio Each bed is covered with centralized oxygen,
                            air & suction facility & equipped with
                            multi-para monitor (having facility for both invasive & non Invasive & Monitoring),
                            infusion pump, volumetric pump, and
                            emergency drugs</p>

                    </div>
                </div>
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-baby"></i>
                        <h5>Neonatal Intensive Care Unit (NICU)</h5>
                        <p>10 beds NICU is being looked after by the pediatrician and qualified nursing staff in 3:1
                            patient –staff ratio. Each bed is covered with centralized oxygen, air & suction
                            facility & equipped with warmer, photo therapy,
                            monitor (having facility for both invasive & non-invasive monitoring), infusion pump,
                            volumetric pump and emergency drugs,
                            Beside these 2 Ventilators 1 BIPAP and life saving equipment’s are being placed in the
                            unit. </p>

                    </div>
                </div>
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-heart-beat"></i>
                        <h5>Cardiac Care Unit (CCU)</h5>
                        <p>Non-interventional cardiac care unit with all diagnostic, monitoring & lifesaving
                            equipment’s are
                            functioning under the supervision DM-Cardiology. Support, monitoring and treatment of
                            highly dependent patients with medical or surgical cardiac conditions which are life
                            threatening or potentially life-threatening.
                        </p>

                    </div>
                </div>
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-surgeon"></i>
                        <h5>Surgery unit</h5>
                        <p>Modern well-equipped operation theatres with facility of recovery room, labour
                            room and dressing room etc. All theaters are supported with the latest equipment's e.g.
                            OT tables & OT lights, central sterile
                            supply department, central gas & air supply department, updated anesthesiology,
                            qualified staff. We also have laparoscope, arthroscope, operating microscope, endoscope,
                            urotoscope and more many types of
                            equipment’s for all kinds of advanced surgeries/procedures.</p>

                    </div>
                </div>
                <div class="single-service-item">
                    <div class="single-service">
                        <i class="icofont icofont-medicine"></i>
                        <h5>Pharmacy</h5>
                        <p>24 hour Pharmacy in the Hospital provides a wide range of pharmaceutical
                            products, surgical, disposables, lifesaving and general healthcare products and
                            nutritional
                            supplements. Pharmacy also houses Critical Care Drugs, available round the clock in case
                            of any
                            emergency. </p>

                    </div>
                </div>

            </div>
            <a href="{{ route('facilities') }}" class="blog-home-rmbtn m-2">View all <i
                    class="icofont icofont-long-arrow-right"></i></a>
        </div>
        <p style="background: #efefef; margin-top: 29px; padding: 4px;">
            <i class="icofont icofont-tick-mark"></i> Besides above, we have separate burn unit, trauma unit, and
            gastro & renal unit to meet such specific emergencies by
            the concerned super specialists, once the emergency department screened the patient.</p>
    </div>

    <!--- END CONTAINER -->
</section>


<!-- START ABOUT SERVICE SECTION -->
<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Prabha Center of Excellence</h4>
                    <p>Combining the best range of technology with clinical expertise </p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="service-tab">
            <div class="row">
                <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
                    <ul id="tabsJustified" class="nav nav-tabs ">

                          @foreach ($departments as $row)
                        <li class="nav-item ">
                            <a href="{{ route('department',$row->slug) }}" data-target="#{{$row->slug}}" data-toggle="tab" class="nav-link @if ($loop->index==0)
                                active
                            @endif">
                                <h6><i class="icofont icofont-long-arrow-right"></i> {{ $row->title }}</h6>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        @foreach ($departments as $row)
                        <div id="{{$row->slug}}" class="tab-pane animated fadeInRight @if ($loop->index==0)
                                active show
                            @endif ">

                            <img class="img-fluid mb-5" src="{{ Voyager::image($row->image) }}"
                                alt="{{ $row->title }}" />
                            <h5>{{ $row->title }}</h5>
                            <p> {{ $row->excerpt }}</p>
                            <a href="{{ route('department',$row->slug) }}" class="blog-home-rmbtn m-2">Read More<i class="icofont icofont-long-arrow-right"></i></a>

                        </div>

 @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END ABOUT SERVICE SECTION -->
<section id="services" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Our Doctors</h4>

                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row mt-4">
            <div class="service-slider related_doc_widget owl-carousel owl-theme">

                   @foreach ($doctors as $row)
                                    <div class="item">
                                        <div class="blog-singleRecpost">
                                            <img class="img-fluid" src="{{ Voyager::image($row->image) }}"
                                                alt="{{ $row->name }}">
                                            <h5 class="blog-recTitle">
                                                <a href="{{route('doctor',$row->slug)}}">{{ $row->name }}</a>
                                            </h5>
                                            <a href="{{route('doctors_cat',$row->category->slug)}}">{{$row->category->name}}</a>
                                            <p><b>Speciality:</b> {{ $row->speciality }}<br><b>Experience:</b> {{ $row->experience }}</p>
                                            <div class="d-flex mb-2"><a href="{{route('doctor',$row->slug)}}"
                                                    class="btn blog-home-rmbtn m-0 mr-">View
                                                    Profile <i class="icofont icofont-long-arrow-right"></i></a>
                                                <a href="{{route('doctors-appointment')}}" class="btn btn-primary">Book Appointment</a>
                                            </div>
                                        </div>

                                    </div>

                                    @endforeach



            </div>
            <a href="{{ route('doctors') }}" class="blog-home-rmbtn m-2">View all <i
                    class="icofont icofont-long-arrow-right"></i></a>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>


<!-- START PORTFOLIO SECTION -->
<section id="portfolio" class="section-padding ">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Hospital Photo Library</h4>
                        <p>Network of finest and brightest medical experts who provide compassionate care using
                            outstanding expertise and advanced technology.</p>
                    </div>
                </div>
                <!-- end section title -->
            </div>
        </div>
        <div class="row text-center ">
            <div class="portfolio-slider owl-carousel owl-theme">

                @foreach ($data as $row)
            <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ Voyager::image($row->image) }}"
                            alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <a href="{{ Voyager::image($row->image) }}"
                                    class="venobox info" data-title="" data-gall="gall1"><i
                                        class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


                <!-- end single portfolio -->


            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END PORTFOLIO SECTION -->
<section id="testimonialfaq" class="section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Our Patients Speak</h4>
                    <p>Prabha Patient Testimonials</p>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ config('app.url') }}/assets/img/unnamed.jpg" alt="">
            </div>
            <div class="col-lg-6">


                <div class="single-testimonial">
                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <h5>Mr. Jamika Pratap</h5>
                            <p class="sub">Kanpur , Uttarpradesh</p>
                            <p class="test">I came to admit my mother on Sunday, 14.02.2021 in an emergency. I
                                had very good cooperation and immediate attention. Doctors are excellent at CCU and
                                ward also. The hospital staff was very good. Overall it was a good experience.</p>
                            <footer class="blockquote-footer"><i class="icofont icofont-tick-mark"></i> Verified
                            </footer>
                        </div>
                    </div>

                    <div class="single-testimonial-text-warp">
                        <div class="single-testimonial-text-inner">
                            <h5>Mr. Anoop singh</h5>
                            <p class="sub">Agra , Uttarpradesh</p>
                            <p class="test">I strongly recommend Dr B.K. Singh I got an injury in the month of
                                July 2016 post which I did a lot of research looking for a good doctor in different
                                hospitals.</p>
                            <footer class="blockquote-footer"><i class="icofont icofont-tick-mark"></i> Verified
                            </footer>
                        </div>
                    </div>

                    <a href="#" class="blog-home-rmbtn ">View all <i
                            class="icofont icofont-long-arrow-right"></i></a>
                </div>
                <!-- end single testimonial -->

            </div>
            <!-- end col -->
        </div>
    </div>
    <!--- END CONTAINER -->
</section>

<!-- START APPOINTMENT INFO -->

<!-- START TESTIMONIAL & FAQ -->


<!-- END TESTIMONIAL & FAQ -->

</div>
@endsection
