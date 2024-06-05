@extends('visitors.layouts.visitorsApp',['title' => 'Liposuction Treatment'])
@section('content')

<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Most Advanced Minimally Invasive <span> Knee Replacement Surgery</span>
					</h3>
					<p>Prabha Hospital is a Multi- speciality healthcare provider which aims to deliver a hassle free surgical experience to all patients by leveraging technology, and a set of advanced operations and powerful processes.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					 <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/Knee Replacement.jpg"
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
					<h3>What is <span> knee replacement?</span>
					</h3>
					<p>Knee replacement or knee arthroplasty is the surgical procedure to replace a damaged knee. In this process, plastic and metal parts are used to cap and seal the ends of the bones of the knee joint, including the knee cap. An individual with severe knee arthritis or severe knee injury may consider undergoing knee replacement surgery. The aim of knee replacement surgery is to resurface the parts of the knee joint that have been damaged. There are different arthritis that may affect the knee joint such as Osteoarthritis, Rheumatoid arthritis, and Traumatic arthritis.</P>
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
									 <h6><i class="icofont icofont-pills"></i>Risk factors of hip injury</h6>
								</a>
							</li>
							<!--<li class="nav-item">-->
							<!--	<a href="#" data-target="#two" data-toggle="tab" class="nav-link ">-->
							<!--		 <h6><i class="icofont icofont-capsule"></i>Why Painless Treatment?</h6> -->
							<!--	</a>-->
							<!--</li>-->
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
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Older age</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Obesity</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Joint injuries</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Genetics</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Bone deformities</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Stress on the joint </h6></li>
								    </ul>

							</div>
							<!--<div id="two" class="tab-pane animated fadeInRight ">-->
							<!--	    <ul>-->
							<!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Small cuts</h6></li>-->
							<!--			<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No stitch </h6></li>-->
							<!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>1-day discharge</h6></li>-->
							<!--	    </ul>-->
							<!--</div>-->
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
