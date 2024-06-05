@extends('visitors.layouts.visitorsApp',['title' => 'Gynecological'])
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
                <h3>Safe, Private and Confidential Treatment of all <span> Gynecological diseases </span>
                </h3>
                <p>Consult an experienced female OBGYN with safety and privacy both online and offline with Pristyn
                    Care.
                    Book an appointment by calling our number now.
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
               <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="assets/img/diseases/gynecological_diseases.jpg"
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
                <h3>What is <span> gynecology?</span>
                </h3>
                <p>Gynecology, in the simplest sense, is the science of women.
                    It is the branch of medical sciences that specializes in the study of female reproductive organs,
                    such as breasts, uterus, fallopian tubes, ovaries, and vagina. The doctors specializing in this
                    branch are called gynecologists and are experts in treating various gynecological conditions such as
                    irregular periods, vaginal/ urinary infections, pregnancy, abortion, ovarian cysts, uterine health
                    conditions, and pelvic organ prolapse.</p>

                <h4>Who is a gynecologist?</h4>
                <p>
                    A gynecologist is a specialized doctor trained in the structure and functioning of a woman’s
                    reproductive organs.
                </p>
                <p>
                    Most modern-day gynecologists not only specialize in the female reproductive system but also-
                    fertility.
                    They are then called- ‘Obstetrician Gynecologists’ (OB-GYN). These doctors can also aid you in
                    improving
                    ovulation, solving physical obstructions in the fallopian tube or uterus, and helping conceive a
                    healthy pregnancy.
                </p>
                <p>
                    Doctors specializing in either or both fields are trained in both- medicine and surgery and hence
                    capable of providing
                    absolute solutions to regular/ adverse gynecological complications.
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
