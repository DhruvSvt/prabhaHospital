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
{{-- END HEADER SECTION --}}


<section id="about" class="section-padding bg-gray">
    <div class="auto-container mt-5 mb-5">
        <div class="row">
            <div
                class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <h6>Since 1990 - 2020, Battery Park, New York</h6>
                <h3><span>Hair Transplant </span>- Successful and Trusted
                </h3>
                <p>Are you losing your hair with age? Don't know how to prevent hair loss?
                    Get in touch with our certified and experienced Plastic Surgeons to get
                    advanced treatment such as FUT and FUE. Undergo hair transplant surgery and watch
                    hair growing in the bald spot of your scalp.
                </p>
                {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p> --}}
               <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="https://prabha-hospital.com/assets/img/diseases/hair-transplant-lima.jpg"
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
                <h3>What is <span> Hair transplantation?</span>
                </h3>
                <p>Hair transplantation is a surgical process of removing hair follicles from one part of the head and
                    planting it on another.
                    The area from where the follicles are removed is known as 'donor site' and the area where the
                    implantation is done is known as
                    'recipient site.' Hair transplantation is a modern and advanced way of hair care and is basically
                    done to treat male patterns
                    of baldness. Hair transplant is done at dedicated hair care centres under the supervision of a hair
                    expert and his team.
                    The process is used mainly to treat hair loss caused due to deficiency in diet, stress, illness,
                    hormonal imbalance, and
                    reaction to certain medications.</p>
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
            {{-- end section title --}}
        </div>
        <div class="service-tab">
            <div class="row">
                <div class="col-lg-3 col-md-12 c0l-sm-12 col-xs-12">
                    <ul id="tabsJustified" class="nav nav-tabs ">
                        <li class="nav-item ">
                            <a href="#" data-target="#one" data-toggle="tab" class="nav-link active">
                                <h6><i class="icofont icofont-pills"></i>Who is eligible for hair transplantation?</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
                                <h6><i class="icofont icofont-capsule"></i>Who should not undergo hair transplant?</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-target="#three" data-toggle="tab" class="nav-link">
                                <h6><i class="icofont icofont-operation-theater"></i>Benefits of hair transplantation
                                </h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individual having hair
                                        growth at the back and side of the head that acts as donor areas</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individual who keeps
                                        realistic expectations</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individuals with proper
                                        hair characteristics such as hair color, hair caliber, hair color, etc.</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individual who have not
                                        achieved any results after alternative options</h6>
                                </li>
                            </ul>

                        </div>
                        <div id="two" class="tab-pane animated fadeInRight ">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individuals under 24 years
                                        of age</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Those who have no hair from
                                        birth</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Those who react to
                                        anesthesia</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individuals with serious
                                        health complications</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Individuals with
                                        blood-borne illness</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Patients with Hemophilia -
                                        the ability of getting blood clots</h6>
                                </li>
                            </ul>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Enhanced look</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Permanent solution to hair
                                        loss</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Does away with balding</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Low maintenance</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Cost savings</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No major side effects</h6>
                                </li>
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
                    <h4>Before and After Hair Tansplantation</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Aesthetic-Before-and-After-1.jpg"
                    alt="Eye injury">
                <div class="card-body text-center mx-auto">
                   <p class="card-text cause-caption">Eye injury</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Aesthetic-Before-and-After-2.jpg"
                    alt="Short eye ball">
                <div class="card-body">
                   <p class="card-text cause-caption">Short eye ball</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Aesthetic-Before-and-After-3.jpg"
                    alt="Inflammation of the cornea due to any eye disease">
                <div class="card-body">
                   <p class="card-text cause-caption">Inflammation of the cornea due to any eye disease</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
               <img src="https://prabha-hospital.com/assets/img/diseases/Abnormal curve of the cornea.jpg" class="piles-cause" alt="Abnormal curve of the cornea">
               <div class="card-body">
                   <p class="card-text cause-caption">Abnormal curve of the cornea</p>
               </div>
            </div>
            <div class="col text-center mx-auto">
               <img src="https://prabha-hospital.com/assets/img/diseases/Having a weak immune system.jpg" class="piles-cause" alt="Having a weak immune system">
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
			 end section title
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
