@extends('visitors.layouts.visitorsApp',['title' => 'Lasik'])
@section('content')

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
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
                        <textarea class="form-control" placeholder="Describe Your Problem Here"
                            style="height: 100px"></textarea>
                    </div>
                    <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<section id="about" class="section-padding bg-gray">
    <div class="auto-container mt-5 mb-5">
        <div class="row">
            <div
                class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <h6>Since 1990 - 2020, Battery Park, New York</h6>
                <h3><span>LASIK Eye Surgery </span> - The Best Treatment for Blurry Vision
                </h3>
                <p>Get in touch to undergo LASIK eye surgery. We provide advanced treatment for blurry vision and use
                    laser
                    technology to correct vision through a quick, painless, and safe procedure.
                </p>
                {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p> --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="https://prabha-hospital.com/assets/img/diseases/lasik.jpg"
                    style="height:80%; width:80%; border-radius: 12px">
            </div>
        </div>
    </div>
    {{-- - END CONTAINER --}}
</section>


<section class="section-padding">
    <div class="auto-container mt-5 mb-5">
        <div class="row">
              {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
            	<img src="https://prabha-hospital.com/assets/img/piles-patient.jpeg"
            	style="height:80%; width:80%; border-radius: 12px">
            </div> --}}
            <div
                class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <h6>Since 1990 - 2020, Battery Park, New York</h6>
                <h3>What is <span> LASIK Surgery?</span>
                </h3>
                <p>The full form of LASIK is Laser in Situ Keratomileusis.
                    This surgery corrects several vision problems such as myopia (nearsightedness),
                    hypermetropia (farsightedness), or astigmatism. In this procedure, a specialized laser
                    is used to reshape the cornea so that the light entering the eye gets focussed on the retina.
                    This is a common procedure that several people opt for when these eye conditions interfere with
                    daily life. Some people also choose to undergo LASIK surgery so that they don’t have to wear
                    glasses or contact lenses anymore. 8 out of 10 people who undergo LASIK surgery do not need
                    to wear glasses or contact lenses. </p>

                <p>If you also wish to get rid of blurry vision and the hassles of wearing eyeglasses and lenses,
                    get in touch with Pristyn Care today. Consult with our experienced doctors and discuss whether
                    you are eligible for LASIK eye surgery or not. </p>

                {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p> --}}
            </div>
        </div>
    </div>
    {{-- - END CONTAINER --}}
</section>

{{-- START Tags Section --}}
<section id="service" class="section-padding bg-gray mt-7">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Overview</h4>
                </div>
            </div>
            end section title
        </div>
        <div class="service-tab">
            <div class="row">
                <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
                    <ul id="tabsJustified" class="nav nav-tabs ">
                        <li class="nav-item ">
                            <a href="#" data-target="#one" data-toggle="tab" class="nav-link active">
                                <h6><i class="icofont icofont-pills"></i>Benefits of LASIK Surgery</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
                                <h6><i class="icofont icofont-capsule"></i>Who Should Get LASIK Surgery?</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                        	<a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                        		 <h6><i class="icofont icofont-operation-theater"></i> Don't Delay Laser Treatment</h6>
                        	</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Pain | No Stitches | No
                                        Scars</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Experience results within
                                        few hours</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Can be underwent again if
                                        vision changes</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No need to use glasses or
                                        contact lenses</h6>
                                </li>
                            </ul>

                        </div>
                        <div id="two" class="tab-pane animated fadeInRight ">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Suffering from
                                        Nearsightedness or Myopia</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Suffering from
                                        Farsightedness or Hypermetropia</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Suffering from Astigmatism
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                        	 <ul>
                        	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Laparoscopic Treatment</h6></li>
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
{{-- END Tags Section --}}



{{-- START Causes Section --}}
<section class="section-padding mt-7">
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
                <img src="https://prabha-hospital.com/assets/img/diseases/Eye injury.jpg" class="piles-cause"
                    alt="Eye injury">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Eye injury</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Short eye ball.jpg" class="piles-cause"
                    alt="Short eye ball">
                <div class="card-body">
                    <p class="card-text cause-caption">Short eye ball</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Inflammation of the cornea due to any eye disease..jpg"
                    class="piles-cause" alt="Inflammation of the cornea due to any eye disease">
                <div class="card-body">
                    <p class="card-text cause-caption">Inflammation of the cornea due to any eye disease</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Abnormal curve of the cornea.jpg"
                    class="piles-cause" alt="Abnormal curve of the cornea">
                <div class="card-body">
                    <p class="card-text cause-caption">Abnormal curve of the cornea</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Having a weak immune system.jpg"
                    class="piles-cause" alt="Having a weak immune system">
                <div class="card-body">
                    <p class="card-text cause-caption">Having a weak immune system</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- END Causes Section --}}




{{-- START Symptoms Section --}}
<section class="section-padding bg-gray mt-7" >
      <div class="container mt-5 mb-5">
          <div class="row">
			<div class="col-lg-7 text-center mx-auto">
                  <div class="section-title">
                      <h4>Symptoms</h4>
                  </div>
			</div>
{{-- end section title --}}
		</div>
          <div class="row">
		    <div class="col text-center mx-auto">
                  <img src="https://prabha-hospital.com/assets/img/diseases/Cloudy eye lens.jpg" class="piles-cause" alt="Cloudy eye lens">
                  <div class="card-body text-center mx-auto">
                      <p class="card-text cause-caption">Cloudy eye lens</p>
                  </div>
              </div>
              <div class="col text-center mx-auto">
                  <img src="https://prabha-hospital.com/assets/img/diseases/Blurry vision.jpg" class="piles-cause" alt="Blurry vision">
                  <div class="card-body">
                      <p class="card-text cause-caption">Blurry vision</p>
                  </div>
              </div>
              <div class="col text-center mx-auto">
                  <img src="https://prabha-hospital.com/assets/img/diseases/Seeing faded colors.jpg" class="piles-cause" alt="Seeing faded colors">
                  <div class="card-body">
                      <p class="card-text cause-caption">Seeing faded colors</p>
                  </div>
              </div>
              <div class="col text-center mx-auto">
                  <img src="https://prabha-hospital.com/assets/img/diseases/Trouble seeing at night.jpg" class="piles-cause" alt="Trouble seeing at night">
                  <div class="card-body">
                      <p class="card-text cause-caption">Trouble seeing at night</p>
                  </div>
              </div>
              <div class="col text-center mx-auto">
                  <img src="https://prabha-hospital.com/assets/img/diseases/Halos surrounding light.jpg" class="piles-cause" alt="Halos surrounding light">
                  <div class="card-body">
                      <p class="card-text cause-caption">Halos surrounding light</p>
                  </div>
              </div>
	</div>
	</div>
  </section>
{{-- END Symptoms Section --}}
@endsection
