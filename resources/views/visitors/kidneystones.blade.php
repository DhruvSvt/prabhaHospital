@extends('visitors.layouts.visitorsApp',['title' => 'kidney stone'])
@section('content')

<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Permanent relief from <span> kidney stones pain </span>
					</h3>
					<p>Get relief from excruciating kidney stones disease pain once and for all through modern and advanced treatment
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Book Consultation<i class="icofont icofont-caret-right"></i>
                    </button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/kidney-stone.jpg"
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
					<h3>What are <span> Kidney Stones?</span>
					</h3>
					<p>Kidney stones are hard deposits of salt and minerals in the kidneys. These stones usually cause immense pain whenever
					they move or obstruct the urinary tract. Kidney stones differ in size. While some stones can be a few millimetres in size,
					others can grow to inches. Kidney stones are quite prevalent and can affect both men and women equally. Kidney stones can
					be divided into four major types- calcium stones, uric acid stones, struvite stones and cystine stones.</P>
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
									 <h6><i class="icofont icofont-pills"></i>Risks</h6>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
									 <h6><i class="icofont icofont-capsule"></i>Why Painless Treatment?</h6>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" data-target="#three" data-toggle="tab" class="nav-link">
									 <h6><i class="icofont icofont-operation-theater"></i>Don’t Delay Modern Treatment</h6>
								</a>
							</li>
						</ul>
					</div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div id="tabsJustifiedContent" class="tab-content">
							<div id="one" class="tab-pane animated fadeInRight active show">
									<ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Recurrent Urinary tract infections</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Infections in the kidney</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Loss of kidney function</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Renal failure</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Hydronephrosis</h6></li>
								    </ul>

								</div>
							<div id="two" class="tab-pane animated fadeInRight ">
								    <ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>30 min procedure</h6></li>
										<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No major incisions </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No long hospital stays required</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No stitches| No scars</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Negligible postoperative complications</h6></li>
								    </ul>
							</div>
							<div id="three" class="tab-pane animated fadeInRight">
								 <ul>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from the excruciating pain</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No risk of stones growing larger</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from the blockage in the urinary tract</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No risk of urinary tract infections</h6></li>
								</ul>
							</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </section>
	<!--END Tags Section-->



	<!--START Causes Section-->
	<section class="section-padding mt-7" >
        <div class="container mt-5 mb-5">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Causes</h4>
                    </div>
				</div>
			</div>
            <div class="row">
			    <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Lack of water.jpg" class="piles-cause" alt="Lack of water">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Lack of water</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Being overweight.jpg" class="piles-cause" alt="Being overweight">
                    <div class="card-body">
                        <p class="card-text cause-caption">Being overweight</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Chronic diarrhea.jpg" class="piles-cause" alt="Chronic diarrhea">
                    <div class="card-body">
                        <p class="card-text cause-caption">Chronic diarrhea</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/High blood sugar.jpg" class="piles-cause" alt="High blood sugar">
                    <div class="card-body">
                        <p class="card-text cause-caption">High blood sugar</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/High animal protein diet.jpg" class="piles-cause" alt="High animal protein diett">
                    <div class="card-body">
                        <p class="card-text cause-caption">High animal protein diet</p>
                    </div>
                </div>
			</div>
			<div class="row">
				<div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Family history.jpg" class="piles-cause" alt="Family history">
                    <div class="card-body">
                        <p class="card-text cause-caption">Family history</p>
                    </div>
			</div>
		</div>
    </section>
	<!--END Causes Section-->




	<!--START Symptoms Section-->
	<section class="section-padding bg-gray mt-7" >
        <div class="container mt-5 mb-5">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Symptoms</h4>
                    </div>
				</div>
				 <!--end section title -->
			</div>
            <div class="row">
			    <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Severe pain below the ribs, in the side and back.jpg" class="piles-cause" alt="Severe pain below the ribs, in the side and back">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Severe pain below the ribs, in the side and back</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Pain while urinating.jpg" class="piles-cause" alt="Pain while urinating">
                    <div class="card-body">
                        <p class="card-text cause-caption">Pain while urinating</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Pink, red or brown colored urine.jpg" class="piles-cause" alt="Pink, red or brown colored urine">
                    <div class="card-body">
                        <p class="card-text cause-caption">Feeling of pressure in the abdomen or groin</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Foul smelling urine.jpg" class="piles-cause" alt="Foul smelling urine">
                    <div class="card-body">
                        <p class="card-text cause-caption">Foul smelling urine</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Urinating more than often.jpg" class="piles-cause" alt="Urinating more than often">
                    <div class="card-body">
                        <p class="card-text cause-caption">Urinating more than often</p>
                    </div>
                </div>
			</div>
			<div class="row">
			    <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/fever and chills.jpg" class="piles-cause" alt="Fever and chills">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Fever and chills</p>
                    </div>
                </div>
            </div>
		</div>
    </section>
	<!--END Symptoms Section-->

@endsection
