@extends('visitors.layouts.visitorsApp',['title' => 'Book Appointment'])
@section('content')
<section class="single-page-title-area bg-color">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2 style="color: #fff;">Book Appointment</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>

                    <li class="breadcrumb-item active">Appointment</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
 <section id="appointment" class="section-padding">
        <div class="auto-container">
            <div class="row">
				<div class="col-lg-8 text-center mx-auto">
                    <div class="section-title">
                        <h3>Get Appointment <span>In 3 Simple Step</span></h3>
                        <span class="line"></span>
                    </div>
				</div>
				<!-- end section title -->
			</div>
			<div class="appointment-line">
				<div class="row">

					<!-- end single step -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
						<div class="single-step text-center">
							<div class="single-step-icon">
								<i class="icofont icofont-job-search"></i>
							</div>
							<h5>Search For A Doctor</h5>

						</div>
					</div>
					<!-- end single step -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
						<div class="single-step text-center">
							<div class="single-step-icon">
								<i class="icofont icofont-pencil"></i>
							</div>
							<h5>Fill Out The From</h5>

						</div>
					</div>
					<!-- end single step -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-5">
						<div class="single-step text-center">
							<div class="single-step-icon">
								<i class="icofont icofont-verification-check"></i>
							</div>
							<h5>Appointment Done</h5>

						</div>
					</div>
					<!-- end single step -->
				</div>
			</div>
            <div class="row mt-5">
				<div class="col-lg-8 mx-auto">
                    <div class="appointment-form-ma">
                        <div class="mt-1">
                    <h3><span>Book Your Appointment</span></h3>
                    <h4 style="color: red; font-size: 17px; margin-top: 15px;" >Please don't book any doctor's appointments on SUNDAY</h4>
                    @if(session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
                    <hr>
                </div>
                         <form action="{{ route('appointment-store') }}" class="form" method="post" method="POST">
                                             @csrf
                            <div class="row">

							  <div class="form-group col-lg-6">
							    <label>Select Doctor</label>
								<select class="form-control" name="doctor" required="">
                                    <option>Select Doctor</option>
                                      @foreach ($doctors as $row)

								  <option value="{{ $row->id }}">{{ $row->name }}</option>
                                  @endforeach
                                </select>

							  </div>
							  <div class="form-group col-lg-6">
								  <label>Select Date</label>
								  <input type="date"  class="form-control" placeholder="Select Date" name="date" required="">
							  </div>
                               <div class="form-group col-lg-6">
								  <label>Select Time</label>
								  <input type="time"  class="form-control" placeholder="Select Time" name="time" required="">
							  </div>
							  <div class="form-group col-lg-6 mt-2">
                                <label>Patient Name</label>
								 <input type="text" class="form-control" id="afmn" placeholder="Patient Name" name="name" required="">
							  </div>
							  <div class="form-group col-lg-6 mt-2">
                                <label>Your Email</label>
								 <input type="email" name="email" class="form-control" id="afme" placeholder="Your Email">
							  </div>
							  <div class="form-group col-lg-6 mt-2">
                                <label>Phone Number</label>
								 <input type="tel" pattern="[6-9]{1}[0-9]{9}"
       title="Phone number with 6-9 and remaing 9 digit with 0-9" name="phone" required="" class="form-control" id="afmp" placeholder="Phone Number">
							  </div>
							  <div class="form-group col-lg-12 mt-2">
                                <label>Your City</label>
								 <input type="text" name="city" required="" class="form-control" id="afma" placeholder="Your City">
							  </div>

							  <div class="form-group col-lg-12">

								 <button type="submit" class="btn btn-apfm">Book Appointment <i class="icofont icofont-thin-right"></i></button>
							  </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end col -->
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>

@endsection
