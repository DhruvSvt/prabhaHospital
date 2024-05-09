@extends('visitors.layouts.visitorsApp',['title' => 'Circumcision'])
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
                <h3>Advanced laser circumcision to permanently <span> cure phimosis without any cuts and stitches</span>
                </h3>
                <p>We offer laser circumcision for phimosis treatment.
                    It is a state-of-the-art procedure of foreskin removal in a non-invasive manner.
                    Get in touch with us to say goodbye to the painful symptoms of phimosis.
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="assets/img/diseases/surgeon.jpg"
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
                <h3>What is <span> Phimosis?</span>
                </h3>
                <p>Phimosis is a condition in males in which the foreskin doesn’t pull back from the tip of the penis.
                    Every boy is born with a tight foreskin. With age, the foreskin starts to retract and by the time
                    they turn 3,
                    this no longer remains a problem as the foreskin completely loosens up. This is a common problem in
                    young boys
                    which usually gets cured on its own. But in severe cases, when urination becomes difficult or pain
                    is severe,
                    treatment becomes essential. </p>
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
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Recurrence</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Posthitis</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Necrosis and gangrene of
                                        the glans </h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Autoamputation</h6>
                                </li>
                            </ul>

                        </div>
                        <!--<div id="two" class="tab-pane animated fadeInRight ">-->
                        <!--	    <ul>-->
                        <!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No cuts, no stitches, no scars</h6></li>-->
                        <!--			<li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>30-min procedure</h6></li>-->
                        <!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>1-day discharge</h6></li>-->
                        <!--		    <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Most effective treatment</h6></li>-->
                        <!--		</ul>-->
                        <!--</div>-->
                        <!--<div id="three" class="tab-pane animated fadeInRight">-->
                        <!--	 <ul>-->
                        <!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from pain while sitting</h6></li>-->
                        <!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from bleeding in stool</h6></li>-->
                        <!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Reduces chances of anal cancer</h6></li>-->
                        <!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Cures Inflammation in the anal region</h6></li>-->
                        <!--	     <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Treats Rectal Prolapse</h6></li>-->
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
                <img src="assets/img/diseases/Repeated urinary tract infections.jpg"
                    class="piles-cause" alt="Repeated urinary tract infections">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Repeated urinary tract infections</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Infection in the foreskin.jpg"
                    class="piles-cause" alt="Infection in the foreskin">
                <div class="card-body">
                    <p class="card-text cause-caption">Infection in the foreskin</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Rough handling of the foreskin.jpg"
                    class="piles-cause" alt="Rough handling of the foreskin">
                <div class="card-body">
                    <p class="card-text cause-caption">Rough handling of the foreskin</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Trauma or injury to the foreskin.jpg"
                    class="piles-cause" alt="Trauma or injury to the foreskin">
                <div class="card-body">
                    <p class="card-text cause-caption">Trauma or injury to the foreskin</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Genital herpes.jpg" class="piles-cause"
                    alt="Trauma">
                <div class="card-body">
                    <p class="card-text cause-caption">Genital herpes</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Gonorrhea.jpg" class="piles-cause"
                    alt="Gonorrhea">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Gonorrhea</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Syphilis.jpg" class="piles-cause"
                    alt="Syphilis">
                <div class="card-body">
                    <p class="card-text cause-caption">Syphilis</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Eczema.jpg" class="piles-cause" alt="Eczema">
                <div class="card-body">
                    <p class="card-text cause-caption">Eczema</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Lichen planus.jpg" class="piles-cause"
                    alt="Lichen planus">
                <div class="card-body">
                    <p class="card-text cause-caption">Lichen planus</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Lichen sclerosus.jpg" class="piles-cause"
                    alt="Lichen sclerosus">
                <div class="card-body">
                    <p class="card-text cause-caption">Lichen sclerosus</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Psoriasis.jpg" class="piles-cause"
                    alt="Psoriasis">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Psoriasis</p>
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
                <img src="assets/img/diseases/Pain while urinating.jpg" class="piles-cause"
                    alt="Pain while urinating">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Pain while urinating</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Traces of blood in the urine.jpg"
                    class="piles-cause" alt="Traces of blood in the urine">
                <div class="card-body">
                    <p class="card-text cause-caption">Traces of blood in the urine</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Inability to empty the bladder properly.jpg"
                    class="piles-cause" alt="Inability to empty the bladder properly">
                <div class="card-body">
                    <p class="card-text cause-caption">Inability to empty the bladder properly</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Pain in the penis while erection.jpg"
                    class="piles-cause" alt="Pain in the penis while erection">
                <div class="card-body">
                    <p class="card-text cause-caption">Pain in the penis while erection</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Redness, soreness, or swelling of the penis.jpg"
                    class="piles-cause" alt="Redness, soreness, or swelling of the penis">
                <div class="card-body">
                    <p class="card-text cause-caption">Redness, soreness, or swelling of the penis</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Symptoms Section-->
@endsection
