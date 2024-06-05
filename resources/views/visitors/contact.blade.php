@extends('visitors.layouts.visitorsApp',['title' => 'Contact'])
@section('content')
<section class="single-page-title-area bg-color">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2 style="color: #fff;">Contact Us</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>

                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
<div class="gmap_canvas">

    <iframe id="gmap_canvas"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.7766731303784!2d77.9581455325609!3d27.212254334683532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397477c8b35d9d13%3A0xb5a9779d87ba7595!2sPrabha%20hospital%20and%20Trauma%20Center!5e0!3m2!1sen!2sin!4v1654162025212!5m2!1sen!2sin"></iframe>
</div>
<!-- END GOOGLE MAP -->

<!-- START FAQ SECTION-->

<section id="contact" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="contact-title">
						<h4>You Have Any question? Simply Send Us Message</h4>
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
					<div class="contact-form mt-4">
                         <form action="{{ route('enquiry-store') }}" class="form" method="post" method="POST">
                                             @csrf

							<div class="row">
								<div class="form-group col-lg-6">
									<label>Name</label>
									<span class="form-icon"><i class="icofont icofont-user-alt-5"></i></span>
									<input name="name" class="form-control form-controlb" id="cname" required="required" type="text">
								</div>
								<div class="form-group col-lg-6">
									<label>Email</label>
									<span class="form-icon"><i class="icofont icofont-envelope"></i></span>
									<input name="email" class="form-control form-controlb" id="cmail" required="required" type="email">
								</div>
								<div class="form-group col-lg-6">
									<label>Number</label>
									<span class="form-icon"><i class="icofont icofont-telephone"></i></span>
									<input name="phone" class="form-control form-controlb" id="cnumber" required="required" type="tel" pattern="[6-9]{1}[0-9]{9}"
       title="Phone number with 6-9 and remaing 9 digit with 0-9">
								</div>
								<div class="form-group col-lg-6">
									<label>Subject</label>
									<span class="form-icon"><i class="icofont icofont-ui-email"></i></span>
									<input name="subject" class="form-control form-controlb" id="csubject" required="required" type="text">
								</div>
								<div class="form-group col-lg-12">
									<label>Message</label>
									<textarea rows="6" name="message" class="form-control" id="cmessage" placeholder="Your Message Here..." required="required"></textarea>
								</div>
								<div class="form-group col-lg-12 mb0">
									<div class="actions">
										<input value="Submit Message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" type="submit">

									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
					<div class="contact-title">
						<h4>Get In Touch</h4>

						<hr>
					</div>
					<div class="address-box mt-4">
						<div class="single-address-box mb-3">
							<span>Address:</span>
							<p>Nh-2 , geeta Mandir , mathura bypass, road, Sikandra
Agra, Uttar Pradesh 282007 </p>
						</div>
						<div class="single-address-box mb-3">
							<span>Emergency number:</span>
							<p>+91 72520 00343</p>
						</div>
						<div class="single-address-box">
							<span>Appointment number:</span>
							<p>+91 90125 16000</p>
						</div>
					</div>
					<div class="free-quote-box mt-4">
						<h6>Book Your Appointment</h6>

						<a href="{{ route('doctors-appointment') }}">Book Appointment <i class="icofont icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
@endsection
