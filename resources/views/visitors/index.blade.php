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

<section id="services" class="section-padding bg-gray">
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
</section>



<section id="about" class="section-padding">
    <div class="auto-container">
        <div class="row">
            <div
                class="col-lg-7 col-sm-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <p>WHO WE ARE</p>
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
                        <li class="nav-item ">
                            <a href="#" data-target="#one" data-toggle="tab" class="nav-link active">
                                <h6><i class="icofont icofont-baby"></i> Neonatal & Pediatric </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
                                <h6><i class="icofont icofont-capsule"></i> Pediatric Gastro</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-operation-theater"></i> Plastic, Cosmetic &
                                    Reconstructive</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#four" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-dna-alt-1"></i> Genitourinary </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#five" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-autism"></i> Orthopedic & Traumatology </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#six" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-icu"></i> Orunasol laryngology </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#seven" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-dna"></i> Cancer</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#eight" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-brain-alt"></i> Brain & Spinal cord</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#nine" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-tooth"></i> Oral Care</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">

                            <img class="img-fluid mb-5" src="{{ config('app.url') }}/assets/img/neonatal.jpg"
                                alt="" />
                            <h5>Neonatal & Pediatric Surgery</h5>
                            <p> Department-Under this specialized branch 1-day-oldbabies to 14 years old children
                                are being
                                operated under the care of super specialist, Dr. Rajesh Gupta (MCH Pediatric
                                Surgery).Under this branch following
                                surgeries/procedures are being carried out regularly</p>

                        </div>


                        <div id="two" class="tab-pane animated fadeInRight ">
                            <img class="img-fluid mb-5"
                                src="{{ config('app.url') }}/assets/img/06_Gastroenterology-min.jpg"
                                alt="" />
                            <h5>Pediatric Gastro</h5>
                            <p> Pediatric Gastro Intestinal surgery, Hepatobiliary Surgery, Paediatric Urology,
                                Paediatric Thoracic surgery, Paediatric Neuro
                                surgery, Congenital Malformations, and Paediatric Oncology. We are also doing
                                Paediatric Endoscopy such as- Oesophagoscopy,
                                Bronchoscopy Endourology, and Laparoscopy.</p>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">

                            <h5>Plastic, Cosmetic & Reconstructive Surgery Department</h5>
                            <p> Plastic, Cosmetic & Reconstructive Surgery Department- In addition to the unit of
                                Plastic, Cosmetic & Reconstructive surgeries, a
                                unit of microscopic surgery and a specialized Burn Unit are functioning under the
                                supervision of super specialized Plastic &
                                Reconstructive Surgeon. Our Burn unit is fully equipped and is provided in an
                                isolated space within the same campus.
                            </p>
                        </div>
                        <div id="four" class="tab-pane animated fadeInRight">
                            <img class="img-fluid mb-5"
                                src="{{ config('app.url') }}/assets/img/Urology-Genitourinary-Surge-min.jpg"
                                alt="" />
                            <h5>Genitourinary Surgery Department</h5>
                            <p>Genitourinary Surgery Department- This department is functioning under the
                                supervision of the super specialized genitourinary
                                surgeon doing all kinds of Endo Urological procedures. Department of Gyn. & Obs This
                                department is functioning with all updated
                                facility such as antenatal monitoring, programmed labour as well as painless
                                delivery etc. Under this department Endoscopic and
                                Laparoscopic surgeries are being also carried out. We have a team of 4 surgeons.
                                Besides our own team others also do the
                                surgeries of their high profile patients. Department also have a separate IUI/IVF
                                Unit working under the technical guidance of
                                embryologist</p>


                        </div>
                        <div id="five" class="tab-pane animated fadeInRight">
                            <img class="img-fluid mb-5"
                                src="{{ config('app.url') }}/assets/img/orthopaedic-copy-1200x300.jpg"
                                alt="" />
                            <h5>Department of Orthopedic & Traumatology</h5>
                            <p>Department of Orthopedic & Traumatology- Under the close supervision of the
                                management, department is functioning with
                                round the clock emergency and causality department to take all kinds of accidents.
                                We also have the facility of specialized Joint
                                replacement & minimal invasive orthopedics under the supervision of arthroscopy
                                surgeon. The department is also having an
                                image intensifier with close circuit TV monitoring for accurate results.
                                A specialized physiotherapy unit is also functioning under the guidance of an
                                orthopedic surgeon.</p>


                        </div>
                        <div id="six" class="tab-pane animated fadeInRight">

                            <h5>Orunasol laryngology</h5>
                            <p>Orunasol laryngology (ENT Department)- Dr. Ajay Mahajan, Dr. Rajeev Pachauri, and Dr.
                                Prashant Jain, are carrying out all kinds of ENT
                                related surgeries regularly. Besides routine surgeries, we have the facility of
                                operating microscope and endoscopes for advanced
                                procedures. We also have the facility for hearing aids.</p>


                        </div>

                        <div id="seven" class="tab-pane animated fadeInRight">

                            <h5>Department of Oncology</h5>
                            <p>Department of Oncology- Dr. Narendra Deo (M.Ch.), cancer surgeon is doing the cancer
                                surgery. Under the supervision of Dr. Narendra
                                Deo we have the facility of chemo therapy also. We also have an in house cancer
                                physician to look after the post operation
                                consequences.
                            </p>


                        </div>
                        <div id="eight" class="tab-pane animated fadeInRight">

                            <h5>Neurosurgery</h5>
                            <p>Neurosurgery- Head injury & spinal trauma, Brain Tumor, Brain Hemorrhage, disc
                                prolapse, spinal surgery, Brain & Spinal cord disease
                                etc. are being treated by this unit. Dr. S.K. Gupta (M. Ch.), Neurosurgeon is
                                heading the department. Besides him other neurosurgeons
                                are also performing the surgeries at Prabha Hospital. Department also has the in
                                house support of the neuro physician to deal with head
                                injuries, we have a good team of specialists for trauma management.
                            </p>


                        </div>
                        <div id="nine" class="tab-pane animated fadeInRight">
                            <img class="img-fluid mb-5"
                                src="{{ config('app.url') }}/assets/img/oral-health-care-thumb.jpg"
                                alt="" />
                            <h5>Oral & Dental Care Unit</h5>
                            <p>Oral & Dental Care Unit- A specialized dental unit is being managed for all kinds of
                                the dental surgeries, oral & cosmetic care, and
                                implantation. We have a team of implantologist, Oral & Dental Surgeon and Dental &
                                Cosmetic Surgeon unit is having all modern
                                equipment’s and programmed dental chair, department also has the dental X-ray
                            </p>


                        </div>
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
            <div class="service-slider owl-carousel owl-theme">
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr B.K. Singh</h3>
                                <p>Chairman - Anesthesiologist (MD, MBBS)</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr Priyank Kumar Singh </h3>
                                <p>Critical Care (MD, MBBS)</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr U.C. Arora </h3>
                                <p>Nephrologist (MD, DNB, DM) </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr S.K. Gupta </h3>
                                <p>Neuro surgeon (M.ch)</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>.Dr Kartikey Sharma </h3>
                                <p>Orthopedic (MS) </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/male-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr Premashish Majumdar </h3>
                                <p>(MD, DM) Neonatologist</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single-service-item">
                    <div class="box-doc">
                        <div class="doc-profile">
                            <div class="docProfile-img">
                                <img class="doc-img lazyload"
                                    src="{{ config('app.url') }}/assets/img/female-doctor-removebg-preview.png"
                                    alt="Dr B.K. Singh">
                            </div>
                            <div class="docProfile-name">
                                <h3>Dr Shalini Sharma</h3>
                                <p>MBBS, MD & DM Gastrology</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <a href="{{ route('ourdoctors') }}" class="blog-home-rmbtn m-2">View all <i
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
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ config('app.url') }}/assets/img/Emergency-min.png"
                            alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Emergency</h5>

                                <a href="{{ config('app.url') }}/assets/img/Emergency-min.png"
                                    class="venobox info" data-title="Emergency" data-gall="gall1"><i
                                        class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ config('app.url') }}/assets/img/ICU-min.png"
                            alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>ICU</h5>
                                <a href="{{ config('app.url') }}/assets/img/ICU-min.png" class="venobox info"
                                    data-title="ICU" data-gall="gall1"><i class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ config('app.url') }}/assets/img/pharmacy-min.png"
                            alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>Pharmacy</h5>
                                <a href="{{ config('app.url') }}/assets/img/pharmacy-min.png"
                                    class="venobox info" data-title="Pharmacy" data-gall="gall1"><i
                                        class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single portfolio -->
                <div class="single-gallery-item">
                    <div class="single-gallery single-gallery-first">
                        <img class="img-fluid" src="{{ config('app.url') }}/assets/img/nicu-min.png"
                            alt="" />
                        <div class="single-gallery">
                            <div class="single-gallery-inner">
                                <h5>NICU</h5>
                                <a href="{{ config('app.url') }}/assets/img/nicu-min.png" class="venobox info"
                                    data-title="NICU" data-gall="gall1"><i
                                        class="icofont icofont-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

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
