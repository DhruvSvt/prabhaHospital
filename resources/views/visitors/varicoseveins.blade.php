@extends('visitors.layouts.visitorsApp',['title' => 'Varicoseveins'])
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
                <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                <h3>Painless laser treatment for <span> varicose veins</span>
                </h3>
                <p>Get the most advanced and permanent surgical treatment to cure painful symptoms of varicose veins
                    with a 100% success rate
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="https://prabha-hospital.com/assets/img/diseases/varicose veins doctor.jpg"
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
                <h3>What are <span> Varicose Veins?</span>
                </h3>
                <p>Varicose veins are swollen, twisted and enlarged veins that are the results of faulty and damaged
                    valves.
                    Globally, more than 23 per cent of adult people are thought to be affected by varicose veins every
                    year.
                    Varicose veins commonly affect the legs but can occur at other parts of the body too. Legs are
                    mostly affected
                    by varicose veins because of the pressure that is exerted on the legs due to long-standing hours.
                </p>
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
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Soreness or ulcers which do
                                        not heal on their own</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Bleeding from the thin side
                                        of the skin</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Blood clots in veins just
                                        below the skin</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Deep vein thrombosis
                                        (deeper blood clots in the veins)</h6>
                                </li>
                            </ul>

                        </div>
                        <div id="two" class="tab-pane animated fadeInRight ">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>No cuts, no stitches, no
                                        scars</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Does not occur again </h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>30-40 Min Procedure </h6>
                                </li>
                            </ul>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Get fast recovery treatment
                                    </h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Fewer chances of
                                        complication</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Best healthcare experience
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
                <img src="assets/img/diseases/Family history.jpg" class="piles-cause"
                    alt="Family history">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Family history</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Obesity.jpg" class="piles-cause"
                    alt="Obesity">
                <div class="card-body">
                    <p class="card-text cause-caption">Obesity</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Sitting or standing for long hours.jpg"
                    class="piles-cause" alt="Sitting or standing for long hours">
                <div class="card-body">
                    <p class="card-text cause-caption">Sitting or standing for long hours</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Trauma or injury to the foreskin.jpg"
                    class="piles-cause" alt="Trauma or injury to the foreskin">
                <div class="card-body">
                    <p class="card-text cause-caption">Hormonal changes</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/c - Obesity.jpg" class="piles-cause"
                    alt="Overweight">
                <div class="card-body">
                    <p class="card-text cause-caption">Overweight</p>
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
                <img src="assets/img/diseases/Bleeding from the veins.jpg"
                    class="piles-cause" alt="Pain and heaviness in the legs">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Pain and heaviness in the legs</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Burning and muscle cramping.jpg"
                    class="piles-cause" alt="Burning and muscle cramping">
                <div class="card-body">
                    <p class="card-text cause-caption">Burning and muscle cramping</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Discoloration of the skin.jpg"
                    class="piles-cause" alt="Discoloration of the skin">
                <div class="card-body">
                    <p class="card-text cause-caption">Discoloration of the skin</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Itching and irritation.jpg"
                    class="piles-cause" alt="Itching and irritation">
                <div class="card-body">
                    <p class="card-text cause-caption">Itching and irritation</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Twisted and bulge veins.jpg"
                    class="piles-cause" alt="Twisted and bulge veins">
                <div class="card-body">
                    <p class="card-text cause-caption">Twisted and bulge veins</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Symptoms Section-->
@endsection
