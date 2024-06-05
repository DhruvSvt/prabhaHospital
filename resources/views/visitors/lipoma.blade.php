@extends('visitors.layouts.visitorsApp',['title' => 'Lipoma'])
@section('content')

<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>A Specialized Treatment Center for <span> Lipoma</span>
					</h3>
					<p>Get best-in-class Lipoma Treatment at Prabha Hospital with the help of our experienced surgeons. Undergo Lipoma Excision Procedure and get rid of the fatty lump under your skin.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					 <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/shutterstock_1023401719.png"
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
					<h3>What is <span> Lipoma?</span>
					</h3>
					<p>Lipoma is a condition that arises when a lump of fat starts to grow in the body’s soft tissues. Situated between the skin and underlying muscle layer, it is often considered a tumor by doctors. However, they are non-cancerous. It can occur anywhere on the body but most commonly found on the chest, shoulder, neck, thighs, and forearms. They are considered benign growths and are rarely harmful.</P>
					<p>In some cases, multiple lipomas can be present that can also become painful. As a result, you will need surgical treatment. With Pristyn Care, you can get proper treatment for lipoma through a painless and scarless procedure. Contact Pristyn Care today and undergo lipoma excision surgery for removal of the fatty tissues. </p>
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
									 <h6><i class="icofont icofont-pills"></i>Why opt for Lipoma excision procedure</h6>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
									 <h6><i class="icofont icofont-capsule"></i>Benefits of Lipoma excision procedure</h6>
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
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>A sudden increase in size or pain</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Medication is ineffective</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Avoid side effects of steroids</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Lipoma excision is the 'only' permanent solution</h6></li>
								    </ul>

							</div>
							<div id="two" class="tab-pane animated fadeInRight ">
								    <ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Painless & Scarless Procedure</h6></li>
										<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No recurrence </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>30 mins procedure | 1-day discharge</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Resume work in 1 day </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Side Effects </h6></li>
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
	<!--END Tags Section-->


@endsection
