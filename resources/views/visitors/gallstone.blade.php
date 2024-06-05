@extends('visitors.layouts.visitorsApp',['title' => 'Gallstone'])
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
                <h3>Gallstone Surgery (Cholecystectomy) For Permanent Relief from <span> Gallstones Pain</span>
                </h3>
                <p>Gallstone surgery (Cholecystectomy) - To get rid of painful gallstones symptoms with minimally
                    invasive daycare surgical procedure for most effective and permanent results
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
               <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="https://prabha-hospital.com/assets/img/diseases/Gallstones Pain.jpg"
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
                <h3>What are <span>Gallstones?</span>
                </h3>
                <p>allstones are hard materials that form inside the gallbladder.
                    The formation of gallstones is considered as the most common disorder of the gallbladder.
                    Gallstones form when excess cholesterol in the bile crystallizes, causing the gallbladder not to
                    empty properly.
                    They can vary in size- a minute grain of sand to a large golf ball. The gallbladder can then become
                    inflamed and/or infected,
                    this is known as cholecystitis. Although an infection can be treated with antibiotics, the repeated
                    formation of
                    gallstones often requires laparoscopic gallstone surgery.</p>
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
                        <li class="nav-item">
                            <a href="#" data-target="#two" data-toggle="tab" class="nav-link ">
                                <h6><i class="icofont icofont-capsule"></i>Why Painless Treatment?</h6>
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
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Acute swelling of the
                                        pancreas</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Pus formation in the
                                        gallbladder</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Gangrene and perforation of
                                        the gallbladder</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Chronic infection of the
                                        biliary system</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Gallbladder cancer</h6>
                                </li>
                            </ul>

                        </div>
                        <div id="two" class="tab-pane animated fadeInRight ">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>45 min Procedure</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>
                                        < 1 cm Incision</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>24hr Hospitalization</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Pain | No Stitches | No
                                        Scars</h6>
                                </li>
                            </ul>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Laparoscopic Treatment</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Risk of Recurrence</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Minimum Pain</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No Stitches, and No Scars
                                    </h6>
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
                <img src="https://prabha-hospital.com/assets/img/diseases/Bile contains too much cholesterol.jpg"
                    class="piles-cause" alt="Bile contains too much cholesterol">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Bile contains too much cholesterol</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Bile contains too much bilirubin.jpg"
                    class="piles-cause" alt="Bile contains too much bilirubin">
                <div class="card-body">
                    <p class="card-text cause-caption">Bile contains too much bilirubin</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Gallbladder doesn't empty correctly.jpg"
                    class="piles-cause" alt="Gallbladder doesn't empty correctly">
                <div class="card-body">
                    <p class="card-text cause-caption">Gallbladder doesn't empty correctly</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Excess estrogen due to pregnancy or hormone replacement therapy.jpg"
                    class="piles-cause" alt="Excess estrogen due to pregnancy or hormone replacement therapy">
                <div class="card-body">
                    <p class="card-text cause-caption">Excess estrogen due to pregnancy or hormone replacement therapy
                    </p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Weak digestive system.jpg" class="piles-cause"
                    alt="Weak digestive system">
                <div class="card-body">
                    <p class="card-text cause-caption">Weak digestive system</p>
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
                <img src="https://prabha-hospital.com/assets/img/diseases/s - High fever with chills.jpg"
                    class="piles-cause" alt="High fever with chills">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">High fever with chills</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/s - dark color urin or clay color stool.jpg"
                    class="piles-cause" alt="Dark color urine or clay color stools">
                <div class="card-body">
                    <p class="card-text cause-caption">Dark color urine or clay color stools</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/s - Intense pain in abdomen and right shoulder.jpg"
                    class="piles-cause" alt="Intense pain in the central abdomen and right shoulder">
                <div class="card-body">
                    <p class="card-text cause-caption">Intense pain in the central abdomen and right shoulder</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/Digestive problems such as heartburn.jpg"
                    class="piles-cause" alt="Digestive problems such as heartburn">
                <div class="card-body">
                    <p class="card-text cause-caption">Digestive problems such as heartburn</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="https://prabha-hospital.com/assets/img/diseases/s - Nausea or vomiting.jpg"
                    class="piles-cause" alt="Nausea and vomiting">
                <div class="card-body">
                    <p class="card-text cause-caption">Nausea and vomiting</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Symptoms Section-->
@endsection
