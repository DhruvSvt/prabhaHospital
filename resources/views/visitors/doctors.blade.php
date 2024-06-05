@extends('visitors.layouts.visitorsApp', ['title' => $title])
@section('content')
    <section class="single-page-title-area bg-color">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="single-page-title">
                        <h2 style="color: #fff;">{{ $title }}</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span
                                    class="icofont
                                icofont-ui-home"></span></a></li>

                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
            <!-- end row-->
        </div>
    </section>

    <section id="singledoctor" class="section-padding doctor-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="related_doc_widget">
                        <div class="row">
                            @foreach ($data as $row)
                                <div class="col-lg-6">
                                    <div class="blog-singleRecpost">
                                        <img class="img-fluid" src="{{ Voyager::image($row->image) }}"
                                            alt="{{ $row->name }}">
                                        <h5 class="blog-recTitle">
                                            <a href="{{ route('doctor', $row->slug) }}">{{ $row->name }}</a>
                                        </h5>
                                        <a
                                            href="{{ route('doctors_cat', $row->category->slug) }}">{{ $row->category->name }}</a>
                                        <p><b>Speciality:</b> {{ $row->speciality }}<br><b>Experience:</b>
                                            {{ $row->experience }}</p>
                                        <div class="d-flex mb-2"><a href="{{ route('doctor', $row->slug) }}"
                                                class="btn blog-home-rmbtn m-0 mr-">View
                                                Profile <i class="icofont icofont-long-arrow-right"></i></a>
                                            <a href="{{ route('doctors-appointment') }}" class="btn btn-primary">Book
                                                Appointment</a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>
                <aside class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5 pr-lg-5 pr-md-5 pr-sm-0 pr-0">
                    <div class="sidebar-widget">
                        <h5 class="widget-title">Speciality</h5>
                        <!-- end widget tittle-->
                        <div class="servide-list">

                            <ul>
                                @foreach ($cats as $row)
                                    <li><a href="{{ route('doctors_cat', $row->slug) }}"><i
                                                class="icofont icofont-arrow-right"></i> {{ $row->name }}</a></li>
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
@endsection
