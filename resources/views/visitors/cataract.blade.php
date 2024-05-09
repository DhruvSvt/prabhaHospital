@extends('visitors.layouts.visitorsApp',['title' => 'Cataract'])
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
<!-- END HEADER SECTION -->


<section id="about" class="section-padding bg-gray">
    <div class="auto-container mt-5 mb-5">
        <div class="row">
            <div
                class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                <h3>Cataract Surgery- The Safe & Effective <span> Treatment for Cataracts </span>
                </h3>
                <p>Get in touch ophthalmologists to get proper treatment for cataracts.
                    Visit the nearest clinic and undergo cataract surgery to regain your vision.
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="https://prabha-hospital.com/assets/img/diseases/Cataract Surgery.jpg"
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
            <div
                class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                <h3>What is <span> Cataract Surgery?</span>
                </h3>
                <p>Cataract surgery is the surgical treatment of cataracts. It involves the removal of the defective or
                    cloudy eye lens and replacing it with an artificial lens.</p>

                <p>A cataract is a disease that usually occurs with age but can also occur due to other reasons like eye
                    injury or genetic factors.
                    It cannot be reversed or treated through medications. And if not treated on time, cataracts can even
                    cause permanent blindness.
                    Surgery is the only permanent solution for cataracts.</p>

                <p>If you have been diagnosed with a cataract in one or both eyes,
                    you can contact Pristyn Care and get advanced treatment for all types of cataracts. </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>

<!--START Tags Section -->
<section id="service" class="section-padding bg-gray mt-7">
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
                    </ul>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div id="tabsJustifiedContent" class="tab-content">
                        <div id="one" class="tab-pane animated fadeInRight active show">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Ageing</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Diabetesr</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Smoking</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Excessive exposure to
                                        sunlight (UV)</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Obesity</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Drug induced</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Previous eye surgery</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Eye injury</h6>
                                </li>
                            </ul>

                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--END Tags Section-->



<!--START Causes Section-->
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
                <img src="https://prabha-hospital.com/assets/img/diseases/Aging.jpg" class="piles-cause" alt="Aging">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Aging</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/c - Consuming tobacco or smoking.jpg"
                    class="piles-cause" alt="Smoking">
                <div class="card-body">
                    <p class="card-text cause-caption">Smoking</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Ultraviolet radiation.jpg" class="piles-cause"
                    alt="Ultraviolet radiation">
                <div class="card-body">
                    <p class="card-text cause-caption">Ultraviolet radiation</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Hypertension.jpg" class="piles-cause"
                    alt="Hypertension">
                <div class="card-body">
                    <p class="card-text cause-caption">Hypertension</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Diabetes.jpg" class="piles-cause"
                    alt="Diabetes">
                <div class="card-body">
                    <p class="card-text cause-caption">Diabetes</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Obesity.jpg" class="piles-cause"
                    alt="Obesity">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Obesity</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/High alcohol consumption.jpg"
                    class="piles-cause" alt="High alcohol consumption">
                <div class="card-body">
                    <p class="card-text cause-caption">High alcohol consumption</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/High myopia.jpg" class="piles-cause"
                    alt="High myopia">
                <div class="card-body">
                    <p class="card-text cause-caption">High myopia</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Previous eye surgery.jpg" class="piles-cause"
                    alt="Previous eye surgery">
                <div class="card-body">
                    <p class="card-text cause-caption">Previous eye surgery</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Causes Section-->




<!--START Symptoms Section-->
<section class="section-padding bg-gray mt-7">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Symptoms</h4>
                </div>
            </div>
            <!-- end section title -->
        </div>
        <div class="row">
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Cloudy eye lens.jpg" class="piles-cause"
                    alt="Cloudy eye lens">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Cloudy eye lens</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Blurry vision.jpg" class="piles-cause"
                    alt="Blurry vision">
                <div class="card-body">
                    <p class="card-text cause-caption">Blurry vision</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Seeing faded colors.jpg" class="piles-cause"
                    alt="Seeing faded colors">
                <div class="card-body">
                    <p class="card-text cause-caption">Seeing faded colors</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Trouble seeing at night.jpg"
                    class="piles-cause" alt="Trouble seeing at night">
                <div class="card-body">
                    <p class="card-text cause-caption">Trouble seeing at night</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Halos surrounding light.jpg"
                    class="piles-cause" alt="Halos surrounding light">
                <div class="card-body">
                    <p class="card-text cause-caption">Halos surrounding light</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Increased sensitivity to glare.jpg"
                    class="piles-cause" alt="Increased sensitivity to glare">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Increased sensitivity to glare</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Double vision.jpg" class="piles-cause"
                    alt="Double vision">
                <div class="card-body">
                    <p class="card-text cause-caption">Double vision</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Symptoms Section-->

@endsection
