@extends('visitors.layouts.visitorsApp',['title' => 'Appendicitis'])
@section('content')
	<!-- END HEADER SECTION -->


	<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Get painless minimally-invasive laparoscopic surgery for permanent treatment of <span> appendicitis </span>
					</h3>
					<p>Appendicitis can hinder a person's day to day life activities.
					Now you can get the most advanced minimally-invasive surgical treatment and
					permanently get away with the problem of appendicitis.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					 <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/aqwrf.jpg"
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
					<h3>What is <span> Appendicitis?</span>
					</h3>
					<p>Appendicitis is a medical condition where the appendix becomes inflamed and filled with pus,
					causing severe abdominal pain. The appendix is a small 3 and a 1/2-inch-long pouch joined to the
					large intestine on the lower right side of your belly (abdomen).</p>
					<p>Appendicitis typically starts with pain around the navel. Within hours, the pain travels to the lower right-hand side,
					where the appendix usually lies and becomes constant and severe as the inflammation worsens. Although anyone can develop
					appendicitis at any age, most often it occurs in people between the ages of 10 and 30. At Pristyn Care, we have the finest
					doctors and medical coordinators who will take care of you until you are relieved.</p>
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
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>The inflamed appendix will eventually burst or perforate</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>A pocket of pus that forms in the abdomen</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Peritonitis</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>a serious inflammation of the abdominal cavity lining</h6></li>
								    </ul>

								</div>
							<div id="two" class="tab-pane animated fadeInRight ">
								    <ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Pain | No Stitches | No Scars</h6></li>
										<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>30 - 45 min Procedure</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>24hr Hospitalization</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Faster recovery with no pain</h6></li>
								    </ul>
							</div>
							<div id="three" class="tab-pane animated fadeInRight">
								 <ul>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Get fast recovery treatment</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Fewer chances of complication</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i> Best healthcare experience</h6></li>
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
                    <img src="https://prabha-hospital.com/assets/img/diseases/Blockage of the opening in the appendix.jpg" class="piles-cause" alt="Blockage of the opening in the appendix">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Blockage of the opening in the appendix</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/straining-too-much-while-bowl-movement.jpg" class="piles-cause" alt="Hard, rock-like stool">
                    <div class="card-body">
                        <p class="card-text cause-caption">Hard, rock-like stool</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/gastrointestinal tract.jpg" class="piles-cause" alt="Infection in the gastrointestinal tract or swollen lymph nodes in the intestines">
                    <div class="card-body">
                        <p class="card-text cause-caption">Infection in the gastrointestinal tract or swollen lymph nodes in the intestines</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Cancerous Tumor or parasites.jpg" class="piles-cause" alt="Cancerous Tumor or parasites">
                    <div class="card-body">
                        <p class="card-text cause-caption">Cancerous Tumor or parasites</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Any abdomen injury or trauma.jpg" class="piles-cause" alt="Any abdomen injury or trauma">
                    <div class="card-body">
                        <p class="card-text cause-caption">Any abdomen injury or trauma</p>
                    </div>
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
                    <img src="https://prabha-hospital.com/assets/img/diseases/Dull pain near the navel.jpg" class="piles-cause" alt="Dull pain near the navel">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Dull pain near the navel</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/sneeze.jpg" class="piles-cause" alt="Pain increases when taking deep breaths, cough, or sneeze">
                    <div class="card-body">
                        <p class="card-text cause-caption">Pain increases when taking deep breaths, cough, or sneeze</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Nausea ,vomiting and inability to pass gas.jpg" class="piles-cause" alt="Nausea ,vomiting and inability to pass gas">
                    <div class="card-body">
                        <p class="card-text cause-caption">Nausea ,vomiting and inability to pass gas</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Loss of appetite.jpg" class="piles-cause" alt="Loss of appetite">
                    <div class="card-body">
                        <p class="card-text cause-caption">Loss of appetite</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Low-grade fever.jpg" class="piles-cause" alt="Low-grade fever">
                    <div class="card-body">
                        <p class="card-text cause-caption">Low-grade fever</p>
                    </div>
                </div>
			</div>
		</div>
    </section>
	<!--END Symptoms Section-->

  @endsection
