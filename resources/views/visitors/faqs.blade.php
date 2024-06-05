@extends('visitors.layouts.visitorsApp', ['title' => 'FAQs'])
@section('content')
    <section class="single-page-title-area bg-color">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="single-page-title">
                        <h2 style="color: #fff;">FAQs</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span
                                    class="icofont
                                icofont-ui-home"></span></a></li>

                        <li class="breadcrumb-item active">FAQs</li>
                    </ol>
                </div>
            </div>
            <!-- end row-->
        </div>
    </section>


    <!-- START FAQ SECTION -->
    <section id="faq" class="section-padding">
        <div class="auto-container">


            <div class="row mt-5">
                <div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h3>Frequently Asked Question</h3>
                        <span class="line"></span>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-2 mb-2">
                    <div class="panel-group faq-home-accor" id="accordion">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" href="#panel1">Where is Prabha
                                        Hospital located in Agra?</a>
                                </h5>
                            </div>
                            <div id="panel1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Prabha Hospital, recognized as one of the best hospitals in Agra, is located at Nh-2
                                        , geeta Mandir , mathura bypass, road, Sikandra
                                        Agra, Uttar Pradesh 282007.</p>
                                </div>
                            </div>
                        </div>







                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" href="#panel11">How can I book an
                                        appointment at Prabha Hospital, known as one of the best hospitals in Agra?</a>
                                </h5>
                            </div>
                            <div id="panel11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        To book an appointment at Prabha Hospital, recognized for its excellence in
                                        healthcare, you can Call On <a href="tel:+917252000343">+91 72520 00343</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" href="#panel112">Does Prabha Hospital,
                                        considered one of the best hospitals in Agra, accept health insurance?</a>
                                </h5>
                            </div>
                            <div id="panel112" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Yes, Prabha Hospital, counted among the best hospitals in Agra, accepts most major
                                        health insurance plans. Please check with your insurance provider for coverage
                                        details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed "
                                        data-toggle="collapse" data-parent="#accordion" href="#panel2">Are there parking
                                        facilities available at Prabha Hospital, known for its outstanding healthcare
                                        services?</a>
                                </h5>
                            </div>
                            <div id="panel2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Yes, Prabha Hospital, acknowledged for its exceptional healthcare facilities, has
                                        ample parking facilities for patients and visitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" href="#panel3">Does Prabha Hospital
                                        have an emergency department, recognized as one of the best in Agra?</a>
                                </h5>
                            </div>
                            <div id="panel3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Yes, Prabha Hospital, renowned for its state-of-the-art emergency services, has a
                                        fully-equipped emergency department that operates 24/7.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icofont icofont-thin-down"></i> <a class="accordion-toggle collapsed"
                                        data-toggle="collapse" data-parent="#accordion" href="#panel4">Does Prabha Hospital
                                        have a pharmacy on-site, making it convenient for patients?</a>
                                </h5>
                            </div>
                            <div id="panel4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>
                                        Yes, Prabha Hospital, known for its patient-centric approach, has a pharmacy on-site
                                        for the convenience of patients.
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
@endsection
