@extends('visitors.layouts.visitorsApp',['title' => $title])
@section('content')
<section class="single-page-title-area bg-color">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2 style="color: #fff;">{{ $data->title }}</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>
                    <li class="breadcrumb-item">Departments</li>
                    <li class="breadcrumb-item active">{{ $data->title }}</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
<!-- END PAGE BANNER AND BREADCRUMBS -->


<!-- START SERVICE SECTION -->
<section id="service" class="section-padding">
    <div class="auto-container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="image-tab">


                    <img class="img-fluid" src="{{ Voyager::image($data->image) }}" alt="{{ $data->title }}">


                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h4>{{ $data->title }}</h4>
                        <hr>
                        <p class="mb-3">{{ $data->excerpt }}</p>
                        <div class="mt-3">
                            {!! $data->body !!}
                        </div>
                        <div class="sidebar-widget">
                            <h5 class="widget-title">Our Doctors</h5>
                            <!-- end widget tittle-->
                            <div class="related_doc_widget">
                                <div class="row">
                                    @foreach ($doctors as $row)
                                    <div class="col-lg-6">
                                        <div class="blog-singleRecpost">
                                            <img class="img-fluid" src="{{ Voyager::image($row->image) }}"
                                                alt="{{ $row->name }}">
                                            <h5 class="blog-recTitle">
                                                <a href="#">{{ $row->name }}</a>
                                            </h5>
                                            <p>{{ $row->speciality }}<br>Experience: {{ $row->experience }}</p>
                                            <div class="d-flex mb-2"><a href="#"
                                                    class="btn blog-home-rmbtn m-0 mr-">View
                                                    Profile <i class="icofont icofont-long-arrow-right"></i></a>
                                                <a href="#" class="btn btn-primary">Book Appointment</a>
                                            </div>
                                        </div>

                                    </div>

                                    @endforeach


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <aside class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0">
                <div class="sidebar-widget">
                    <h5 class="widget-title">Departments</h5>
                    <!-- end widget tittle-->
                    <div class="servide-list">

                        <ul>
                            @foreach ($departments as $row)
                            <li><a href="{{ route('department',$row->slug) }}"><i
                                        class="icofont icofont-arrow-right"></i> {{ $row->title }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <!-- end widget -->
                <div class="sidebar-widget">
                    <h5 class="widget-title">Book Appointment</h5>
                    <!-- end widget tittle-->
                    <div class="servide-list">
                        <ul>
                            <li><a href="{{ route('doctors-appointment') }}"><i
                                        class="icofont icofont-calendar"></i>Book Appointment</a> </li>
                            <li><a href="tel:+919012516000"><i class="icofont icofont-doctor"></i> Call Us</a> </li>
                            <li><a href="tel:+917252000343"><i class="icofont icofont-law-document"></i> Emergency
                                    number</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- end widget -->

                <!-- end widget -->

                <!-- end widget -->
            </aside>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!-- END SERVICE SECTION -->

<!-- SINGLE DOCTOR PROMO -->

<!-- END SINGLE DOCTOR PROMO -->
@endsection
