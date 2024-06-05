@extends('visitors.layouts.visitorsApp',['title' => 'Aesthetics'])
@section('content')

<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Consult with Best Plastic Surgeons at <span> Prabha Hospital </span>
					</h3>
					<p>Get advanced treatment from the best plastic surgeons.
					Visit Prabha Hospital to undergo advanced and minimally invasive cosmetic procedures at cost-effective prices.
					Enhance your physical appearance and get treatment for medical conditions that affect the aesthetics.
					Visit the nearest clinic and undergo cataract surgery to regain your vision.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					<a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/nurses-patients-care-procedures.webp"
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
					<h3>What is <span> Plastic Surgery?</span>
					</h3>
					<p>Plastic surgery is a specialty that focuses on restoring, reconstructing, and altering the human body in some way. Plastic surgery is mainly divided into two main categories, i.e., reconstructive surgery and cosmetic surgery. .</p>

					<p>While reconstructive surgery involves craniofacial surgery, hand surgery, microsurgery, treatment of burns, etc. cosmetic surgery is done for improvement of the existing features. .</p>

					<p>If you have been diagnosed with a cataract in one or both eyes,
					you can contact Pristyn Care and get advanced treatment for all types of cataracts. </p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->

					<h4>Who are Plastic Surgeons?</h4>
					<p>Plastic surgeons are doctors who specialize in both reconstructive and cosmetic procedures. Some plastic surgeons also choose to become cosmetic surgeons and perform only the procedures that change a person’s aesthetic appearance. However, you should know that not all plastic surgeons are cosmetic surgeons. </p>
					<p>Cosmetic surgeons are the doctors who opt for an Aesthetics fellowship after completing their residency studies. If you wish to change the way you look, you can contact any physician that is legally allowed to perform cosmetic surgeries. </p>
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>

	<!--START Tags Section -->
	<!--<section id="service" class="section-padding bg-gray mt-7" >-->
 <!--       <div class="container mt-5 mb-5">-->
 <!--           <div class="row">-->
	<!--			<div class="col-lg-7 text-center mx-auto">-->
 <!--                   <div class="section-title">-->
 <!--                       <h4>Overview</h4>-->
 <!--                   </div>-->
	<!--			</div>-->
				<!-- end section title -->
	<!--		</div>-->
	<!--		<div class="service-tab">-->
 <!--               <div class="row">-->
 <!--                    <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">-->
	<!--					 <ul id="tabsJustified" class="nav nav-tabs ">-->
	<!--						<li class="nav-item ">-->
	<!--							<a href="#" data-target="#one" data-toggle="tab" class="nav-link active">-->
	<!--								 <h6><i class="icofont icofont-pills"></i>Risks</h6>-->
	<!--							</a>-->
	<!--						</li>-->
							<!--<li class="nav-item">-->
							<!--	<a href="#" data-target="#two" data-toggle="tab" class="nav-link ">-->
							<!--		 <h6><i class="icofont icofont-capsule"></i>Why Painless Treatment?</h6> -->
							<!--	</a>-->
							<!--</li>-->
							<!--<li class="nav-item">-->
							<!--	<a href="#" data-target="#three" data-toggle="tab" class="nav-link">-->
							<!--		 <h6><i class="icofont icofont-operation-theater"></i> Don't Delay Laser Treatment</h6>-->
							<!--	</a>-->
							<!--</li>-->
					<!--	</ul>-->
					<!--</div>-->
     <!--               <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">-->
					<!--	<div id="tabsJustifiedContent" class="tab-content">-->
					<!--		<div id="one" class="tab-pane animated fadeInRight active show">-->
					<!--				<ul>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Ageing</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Diabetesr</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Smoking</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Excessive exposure to sunlight (UV)</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Obesity</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Drug induced</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Previous eye surgery</h6></li>-->
					<!--				    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Eye injury</h6></li>-->
					<!--			    </ul>-->

					<!--			</div>-->
							<!--<div id="two" class="tab-pane animated fadeInRight ">-->
							<!--	    <ul>-->
							<!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>45 min Procedure</h6></li>-->
							<!--			<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>< 1 cm Incision</h6></li>-->
							<!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>24hr Hospitalization</h6></li>-->
							<!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Pain | No Stitches | No Scars</h6></li>-->
							<!--		</ul>-->
							<!--</div>-->
							<!--<div id="three" class="tab-pane animated fadeInRight">-->
							<!--	 <ul>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Laparoscopic Treatment</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Risk of Recurrence</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Minimum Pain</h6></li>-->
							<!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Stitches, and No Scars</h6></li>-->
							<!--	</ul>-->
							<!--</div>-->
			<!--					</div>-->
			<!--				</div>	-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
   <!-- </section>-->
	<!--END Tags Section-->



	<!--START Causes Section-->
	<section class="section-padding mt-7" >
        <div class="container mt-5 mb-5">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Aesthetics</h4>
                    </div>
				</div>
			</div>
            <div class="row">
			    <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Breast-Lift---Breast-augmentation.jpg" alt="Aging">
                    <!--<div class="card-body text-center mx-auto">-->
                    <!--    <p class="card-text cause-caption">Aging</p>-->
                    <!--</div>-->
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Gynecomastia-{Male-Oriented}.jpg"  alt="Smoking">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Smoking</p>-->
                    <!--</div>-->
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Liposuction-{-Female-Oriented-}.jpg" alt="Ultraviolet radiation">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Ultraviolet radiation</p>-->
                    <!--</div>-->
                </div>
                <div class="col text-center mx-auto">
                    <img src="https://prabha-hospital.com/assets/img/diseases/Hair-Transplant.jpg"  alt="Hypertension">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Hypertension</p>-->
                    <!--</div>-->
                </div>
                <!--<div class="col text-center mx-auto">-->
                <!--    <img src="https://prabha-hospital.com/assets/img/diseases/Diabetes.jpg" class="piles-cause" alt="Diabetes">-->
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Diabetes</p>-->
                    <!--</div>-->
                <!--</div>-->
			</div>
			<!--<div class="row">-->
			<!--    <div class="col text-center mx-auto">-->
   <!--                 <img src="https://prabha-hospital.com/assets/img/diseases/Obesity.jpg" class="piles-cause" alt="Obesity">-->
   <!--                 <div class="card-body text-center mx-auto">-->
   <!--                     <p class="card-text cause-caption">Obesity</p>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--             <div class="col text-center mx-auto">-->
   <!--                 <img src="https://prabha-hospital.com/assets/img/diseases/High alcohol consumption.jpg" class="piles-cause" alt="High alcohol consumption">-->
   <!--                 <div class="card-body">-->
   <!--                     <p class="card-text cause-caption">High alcohol consumption</p>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--             <div class="col text-center mx-auto">-->
   <!--                 <img src="https://prabha-hospital.com/assets/img/diseases/High myopia.jpg" class="piles-cause" alt="High myopia">-->
   <!--                 <div class="card-body">-->
   <!--                     <p class="card-text cause-caption">High myopia</p>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--             <div class="col text-center mx-auto">-->
   <!--                 <img src="https://prabha-hospital.com/assets/img/diseases/Previous eye surgery.jpg" class="piles-cause" alt="Previous eye surgery">-->
   <!--                 <div class="card-body">-->
   <!--                     <p class="card-text cause-caption">Previous eye surgery</p>-->
   <!--                 </div>-->
   <!--             </div>-->
			<!--</div>-->
		</div>
    </section>

@endsection
