@extends('visitors.layouts.visitorsApp',['title' => 'Orthopedic'])
@section('content')

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Contact with us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
              <div class="modal-body">
          <form action="" method="post">
              <div class="mb-3">
              <label for="name" name="name" class="form-label">Full Name : </label>
              <input type="text" class="form-control">
              </div>
              <div class="mb-3">
              <label for="email" name="email" class="form-label">Email : </label>
              <input type="text" class="form-control">
              </div>
              <div class="mb-3">
              <label for="phone" name="phone" class="form-label">Contact : </label>
              <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label for="floatingTextarea2">Descripiton</label>
                  <textarea class="form-control" placeholder="Describe Your Problem Here"  style="height: 100px"></textarea>
              </div>
              <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
      <!-- END HEADER SECTION -->


      <section id="about" class="section-padding bg-gray">
          <div class="auto-container mt-5 mb-5">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>Most Advanced <span> Orthopedic Surgical Center</span>
                      </h3>
                      <p>Enjoy maximum mobility without the fear of pain! Undergo minimally invasive surgery for your orthopaedic condition from the best orthopaedic surgeons and improve your overall quality of life.
                      </p>
                      <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                      <!--<a href="" data-target="#exampleModalCenter" class="about-us-into-btn">Book Consultation<i class="icofont icofont-caret-right"></i></a>-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Book Consultation<i class="icofont icofont-caret-right"></i>
                      </button>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                      <img src="assets/img/diseases/orthopedic.jpg"
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
                  <!--	<img src="assets/img/piles-patient.jpeg" -->
                  <!--	style="height:80%; width:80%; border-radius: 12px">-->
                  <!--</div>-->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>What is <span> Orthopedics?</span>
                      </h3>
                      <p>Orthopedics is the medical field that focuses on the diagnosis and treatment of the human body’s musculoskeletal system. An orthopedic doctor treats patients who suffer from diseases and disorders of the joints, bones, muscles and associated structures including the ligaments, tendons, nerves and bones.</P>
                      <h4>Who is an Orthopedic Surgeon?</h4>
                      <p>An orthopedic surgeon is a specialist doctor who treats patients with disorders, diseases or injuries of the bones, joints, muscles and other associated structures including ligaments, tendons and nerves. They can diagnose and treat a wide range of conditions and problems related to the bone and skeletal system and can also perform surgeries like ACL reconstruction, meniscus surgery, PCL surgery, knee replacement procedure, and more. They can help a patient manage conditions such as arthritis or osteoporosis that usually get worse over time. An orthopedic specialist can help you get relief from pain and discomfort and live a pain free and active life. </p>
                      <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                  </div>
              </div>
          </div>
          <!--- END CONTAINER -->
      </section>
      <!--START Causes Section-->
	<section class="section-padding mt-7" >
        <div class="container mt-5 mb-5">
            <div class="row">
				<div class="col-lg-7 text-center mx-auto">
                    <div class="section-title">
                        <h4>Orthopedic</h4>
                    </div>
				</div>
			</div>
            <div class="row">
			    <div class="col text-center mx-auto">
                    <img src="assets/img/diseases/Acl-tear.jpg" class="piles-cause" alt="Chronic constipation">
                    <!--<div class="card-body text-center mx-auto">-->
                    <!--    <p class="card-text cause-caption">Chronic constipation</p>-->
                    <!--</div>-->
                </div>
                <div class="col text-center mx-auto">
                    <img src="assets/img/diseases/Carpal Tunnel Syndrome.jpg" class="piles-cause" alt="Present since birth due to congenital condition">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Present since birth due to congenital condition</p>-->
                    <!--</div>-->
                </div>
                <div class="col text-center mx-auto">
                    <img src="assets/img/diseases/Hips.jpg" class="piles-cause"  alt="Lifting heavyweights or strenous exercises">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Lifting heavyweights or strenous exercises</p>-->
                    <!--</div>-->
                </div>
                <!--<div class="col text-center mx-auto">-->
                <!--    <img src="assets/img/diseases/Chronic coughing.jpg" alt="Chronic coughing">-->
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Chronic coughing</p>-->
                    <!--</div>-->
                <!--</div>-->
                <div class="col text-center mx-auto">
                    <img src="assets/img/diseases/Knee-Replacement.jpg" class="piles-cause" alt="Being obese or overweight">
                    <!--<div class="card-body">-->
                    <!--    <p class="card-text cause-caption">Being obese or overweight</p>-->
                    <!--</div>-->
                </div>
			</div>
		</div>
    </section>
	<!--END Causes Section-->
    @endsection
