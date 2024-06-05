@extends('visitors.layouts.visitorsApp',['title' => 'Hernia'])
@section('content')
<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Most Effective Laparoscopic Treatment for <span> Hernia for Permanent Results </span>
					</h3>
					<p>Get the most effective, painless, minimally-invasive surgical treatment for hernia in a daycare procedure
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Book Consultation<i class="icofont icofont-caret-right"></i>
                    </button>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/hernia.jpg"
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
					<h3>What is <span> Hernia?</span>
					</h3>
					<p>A hernia occurs when an organ in the abdomen displaces due to the weakening of the muscles that surround the particular organ.
					There are several causes of hernia. Some of them are- consuming tobacco, smoking, poor nutrition, chronic constipation, etc.
					A hernia can occur in the abdomen, upper thigh area, belly button, or groins. Although rare, a hernia can occur in an infant
					also due to the weakness in the muscles during birth, but in general, it occurs later in life.</P>
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
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Strangulation</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Death of tissue</h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Gangrene</h6></li>
								    </ul>

								</div>
							<div id="two" class="tab-pane animated fadeInRight ">
								    <ul>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Small cuts</h6></li>
										<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No stitch </h6></li>
									    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>1-day discharge</h6></li>
								    </ul>
							</div>
							<div id="three" class="tab-pane animated fadeInRight">
								 <ul>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Laparoscopic Treatment</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>90 Minute Procedure</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Risk of Recurrence</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Minimum Pain</h6></li>
								     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Stitches, and No Scars</h6></li>
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
                    <img src="https://prabha-hospital.com/assets/img/diseases/Chronic constipation.jpg" class="piles-cause" alt="Chronic constipation">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Chronic constipation</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Present since birth due to congenital condition.jpg" class="piles-cause" alt="Present since birth due to congenital condition">
                    <div class="card-body">
                        <p class="card-text cause-caption">Present since birth due to congenital condition</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Lifting heavyweights or strenous exercises.jpg" class="piles-cause" alt="Lifting heavyweights or strenous exercises">
                    <div class="card-body">
                        <p class="card-text cause-caption">Lifting heavyweights or strenous exercises</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Chronic coughing.jpg" class="piles-cause" alt="Chronic coughing">
                    <div class="card-body">
                        <p class="card-text cause-caption">Chronic coughing</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Being obese or overweight.jpg" class="piles-cause" alt="Being obese or overweight">
                    <div class="card-body">
                        <p class="card-text cause-caption">Being obese or overweight</p>
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
                    <img src="https://prabha-hospital.com/assets/img/diseases/Lump or bulge in the affected area.jpg" class="piles-cause" alt="Dull pain near the navel">
                    <div class="card-body text-center mx-auto">
                        <p class="card-text cause-caption">Lump or bulge in the affected area</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Heaviness in the groin or abdomen.jpg" class="piles-cause" alt="Heaviness in the groin or abdomen">
                    <div class="card-body">
                        <p class="card-text cause-caption">Heaviness in the groin or abdomen</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/s - Feeling of pressure in the abdomen.jpg" class="piles-cause" alt="Feeling of pressure in the abdomen or groin">
                    <div class="card-body">
                        <p class="card-text cause-caption">Feeling of pressure in the abdomen or groin</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Pain during bowel movement or urination.jpg" class="piles-cause" alt="Pain during bowel movement or urination">
                    <div class="card-body">
                        <p class="card-text cause-caption">Pain during bowel movement or urination</p>
                    </div>
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/s - Difficulty swallowing.jpg" class="piles-cause" alt="Difficulty swallowing in case of hiatal hernia">
                    <div class="card-body">
                        <p class="card-text cause-caption">Difficulty swallowing in case of hiatal hernia</p>
                    </div>
                </div>
			</div>
		</div>
    </section>
<!--END Symptoms Section-->
@endsection
