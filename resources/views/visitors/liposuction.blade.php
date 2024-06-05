@extends('visitors.layouts.visitorsApp',['title' => 'Liposuction Treatment'])
@section('content')

	<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Painless & Scarless <span> Liposuction Treatment </span>For Fat Removal
					</h3>
					<p>Get rid of unwanted fat from different parts of the body through a painless and scarless liposuction treatment. Contact Prabha Hospital and consult the best plastic surgeons in India to achieve desired body shape and contours.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					 <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/Liposuction.jpg"
					style="height:80%; width:80%; border-radius: 12px">
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>


	<section class="section-padding">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
			 <!--   <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">-->
				<!--	<img src="https://prabha-hospital.com/assets/img/piles-patient.jpeg" -->
				<!--	style="height:80%; width:80%; border-radius: 12px">-->
				<!--</div>-->
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>What is <span> Liposuction?</span>
					</h3>
					<p>Liposuction is a surgical procedure that targets the stubborn fat of the body and helps in removing it. The procedure is also known as lipoplasty, lipectomy, lipo, etc. Many people mistake liposuction for weight-loss treatment. However, it is a cosmetic surgery that is performed to remove the fat deposits that don’t go away with diet and exercise. </P>
					<p>Liposuction treatment effectively helps in getting rid of fat around the thighs, hips, buttocks, arms, neck, abdomen, back, etc. If you wish to get rid of fat from different parts of your body safely, get in touch with Pristyn Care and consult our surgeons to understand the benefits of liposuction surgery.   </p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>

	<!--START Tags Section -->
	<section id="service" class="section-padding bg-gray mt-7" >
        <div class="container mt-5 mb-5">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Overview</h4>
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
									 <h6><i class="icofont icofont-pills"></i>Who is eligible for Liposuction?</h6>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
									 <h6><i class="icofont icofont-capsule"></i>Benefits of Liposuction </h6>
								</a>
							</li>
							<!--<li class="nav-item">-->
							<!--	<a href="#" data-target="#three" data-toggle="tab" class="nav-link">-->
							<!--		 <h6><i class="icofont icofont-operation-theater"></i>Don’t Delay Modern Treatment</h6>-->
							<!--	</a>-->
							<!--</li>-->
						</ul>
					</div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div id="tabsJustifiedContent" class="tab-content">
							<div id="one" class="tab-pane animated fadeInRight active show">
									<ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>People over the age of 18</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Who is within 30% of their ideal body weight</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Who has a firm and good muscle tone </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Whose skin has good elasticity </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Who are healthy with no life-threatening illness </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Who has a positive outlook for the procedure and realistic goals in mind </h6></li>
								    </ul>

							</div>
							<div id="two" class="tab-pane animated fadeInRight ">
								    <ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Enhance shape and contours of the body </h6></li>
										<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Remove stubborn excess fat safely  </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Boost overall health and self-esteem  </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Removes the fat cells permanently  </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Boost confidence</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Can be used for treatment of diseases, like gynecomastia, lipoma, sebaceous cysts, etc. </h6></li>
								    </ul>
							</div>
							<!--<div id="three" class="tab-pane animated fadeInRight">-->
							<!--	 <ul>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Laparoscopic Treatment</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>90 Minute Procedure</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Risk of Recurrence</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Minimum Pain</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Stitches, and No Scars</h6></li>-->
							<!--	</ul>-->
							<!--</div>-->
						</div>
					</div>
				</div>
			</div>
    </section>
@endsection
