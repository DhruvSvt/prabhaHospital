@extends('visitors.layouts.visitorsApp',['title' => $title])
@section('content')
<section class="single-page-title-area bg-color">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2 style="color: #fff;">{{ $data->name }}</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>
                    <li class="breadcrumb-item">Doctors</li>
                    <li class="breadcrumb-item active">{{ $data->name }}</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
<!-- END PAGE BANNER AND BREADCRUMBS -->


<!-- START SERVICE SECTION -->
<section id="singledoctor" class="section-padding doctor-page">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="row">
						<div class="col-lg-4 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
							<div class="single-doctor single-doctor-warp">
								<img class="img-fluid" src="{{ Voyager::image($data->image) }}" alt="{{ $data->name }}">
								<div class="single-doctor-info">
									<h4>{{ $data->name }}</h4>
									<span> <a
                                            href="{{ route('doctors_cat', $data->category->slug) }}">{{ $data->category->name }}</a></span> 
								</div>
								 
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-schedule">
								<h4>{{ $data->name }}</h4>
								<hr>
								
                                <table class="table">
                                    <tr>
                                        <th>Speciality</th>
                                        <td>{{ $data->speciality }}</td>
                                    </tr>
                                    <tr>
                                        <th>Degree</th>
                                        <td>{{ $data->degree }}</td>
                                    </tr>
                                    <tr>
                                        <th>Experience</th>
                                        <td>{{ $data->experience }}</td>
                                    </tr>
                                    <tr>
                                        <th>OPD Timing</th>
                                        <td>{{ $data->opdtiming }}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact</th>
                                        <td>{{ $data->contact }}</td>
                                    </tr>
                                </table>
								 
								 
							</div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="single-doc-tab col-lg-12">
							
							<div  class="mt-4">
								
								<p class="mb-3">{{ $data->excerpt }}</p>
								
							</div>
                            <div class="mt-4">
                                {!! $data->body !!}
                            </div>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-lg-12">
							<h4>Lorem ipsum dolor sit amet</h4>
							<hr>
							<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="service-tab-list">
								<div class="row mt-3">
									<div class="col-lg-4 col-md-4 col-sm-4 col-12">
										<ul>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
										</ul>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-12">
										<ul>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
										</ul>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-12">
										<ul>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
											<li><i class="icofont icofont-simple-right"></i> Lorem Ipsum Dollar </li>
										</ul>
									</div>
								</div> 
							</div>	
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-lg-12">
							<h4>What Doctor Say</h4>
							<hr>
							<div class="service-tab-list">
								<div class="row mt-3">
									<div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
										<div class="youtube-promo-two-video-wrap">
											<div class="youtube-promo-two-video-img">
												<img class="img-fluid" src="assets/img/bg/video.jpg" alt="">
											</div>
											<div class="youtube-promo-two-video">
												<a href="https://www.youtube.com/watch?v=U6tSjIAGaTU" data-title="PORTFOLIO YOUTUBE VIDEO" data-vbtype="youtube" class="venobox info vbox-item" data-gall="gallu"><i class="icofont icofont-youtube-play"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-12">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div> 
							</div>	
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
<!-- END SERVICE SECTION -->

<!-- SINGLE DOCTOR PROMO -->

<!-- END SINGLE DOCTOR PROMO -->
@endsection
