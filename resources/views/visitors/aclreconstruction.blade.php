@extends('visitors.layouts.visitorsApp',['title' => 'ACL Reconstruction'])
@section('content')
	<!-- END HEADER SECTION -->
	<section id="about" class="section-padding bg-gray">
        <div class="auto-container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
					<!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
					<h3>Specialised center for <span>ACL reconstruction with guranteed results </span>
					</h3>
					<p>Treat painful symptoms of ACL injury with the most effective and safest surgical treatment at Pristyn Care.
					</p>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
					 <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
					<img src="https://prabha-hospital.com/assets/img/diseases/ACL.jpg"
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
					<h3>What is <span> ACL Tear?</span>
					</h3>
					<p>An anterior cruciate ligament (ACL) Tear is a medical condition where the anterior cruciate ligament is injured or partially
					or completely torn. The most common injury is a complete tear. In more than 50% of incidences of ACL Tears, other structures of
					the knee such as the ligaments or cartilage are damaged.</p>
					<p>The structure of the knee joint consists of the tibia, the patella, and the femur. The ACL is one of the major ligaments
					within the knee that connects the tibia and the femur. The ACL runs diagonally in the middle of the knee. It prevents the tibia
					from sliding out in front of the femur, thus providing stability to the knee.</p>
					<P>The ACL Tear is one of the most common injuries of the knee. The chances of ACL Tear is witnessed mostly in people who take
					part in high-risk sports, such as cricket, soccer, basketball, etc, which demand sudden strong landing of the body and body movements.
					In more than half of ACL Tear injuries, there is a damage of the articular cartilage, the meniscus or other ligaments of the knee.</P>
					<!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
				</div>
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>

	  @endsection
