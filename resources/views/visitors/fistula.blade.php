@extends('visitors.layouts.visitorsApp',['title' => 'Fistula'])
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
                <h3>Get Permanent Relief from Painful Symptoms of<span> Anal Fistula </span>
                </h3>
                <p>Get seamless experience of treating fistula symptoms permanently with the most advanced laser surgery
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="assets/img/fissure.webp"
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
                <h3>What is an <span> anal fistula?</span>
                </h3>
                <p>An anal fistula is a small tunnel that connects an infected gland in and around the anus to the skin
                    around the anus.
                    An anal fistula can cause swelling and pain around the anal area. Anal fistulas are infected
                    cavities that become filled
                    with debris and pus. Globally, 90% of anal fistulas result due to acute anal infections. </p>
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
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Infection</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Perforation</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Sepsis or organ death </h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Incontinence</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Fistula Recurrence</h6>
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
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>30-min procedure</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>1-day discharge</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Most effective treatment
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <div id="three" class="tab-pane animated fadeInRight">
                            <ul>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from pain while
                                        sitting</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from bleeding in
                                        stool</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Reduces chances of anal
                                        cancer</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Cures Inflammation in the
                                        anal region</h6>
                                </li>
                                <li>
                                    <h6><i class="icofont icofont-long-arrow-right mr-2"></i>Treats Rectal Prolapse</h6>
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
                <img src="assets/img/Long-standing abscess.jpg" class="piles-cause"
                    alt="Tight anal sphincter">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Long-standing abscess</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Underlying Medical conditions.jpg" class="piles-cause"
                    alt="Underlying Medical conditions">
                <div class="card-body">
                    <p class="card-text cause-caption">Underlying Medical conditions</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Sexually transmitted infections (STIs).jpg"
                    class="piles-cause" alt="Sexually Transmitted Diseases">
                <div class="card-body">
                    <p class="card-text cause-caption">Sexually Transmitted Diseases</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Tuberculosis.jpg" class="piles-cause"
                    alt="Tuberculosis">
                <div class="card-body">
                    <p class="card-text cause-caption">Tuberculosis</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Trauma.jpg" class="piles-cause" alt="Trauma">
                <div class="card-body">
                    <p class="card-text cause-caption">Trauma</p>
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
                <img src="assets/img/Bleeding.jpg" class="piles-cause" alt="Bleeding">
                <div class="card-body text-center mx-auto">
                    <p class="card-text cause-caption">Bleeding</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Skin Maceration.jpg" class="piles-cause"
                    alt="Rectal pain">
                <div class="card-body">
                    <p class="card-text cause-caption">Skin Maceration</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Perianal swelling.jpg" class="piles-cause"
                    alt="Perianal swelling">
                <div class="card-body">
                    <p class="card-text cause-caption">Perianal swelling</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Pus or blood discharge.jpg" class="piles-cause"
                    alt="Pus or blood discharge">
                <div class="card-body">
                    <p class="card-text cause-caption">Pus or blood discharge</p>
                </div>
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/Pain during bowel movementsurination.jpg"
                    class="piles-cause" alt="Pain during bowel movements/urination">
                <div class="card-body">
                    <p class="card-text cause-caption">Pain during bowel movements/urination</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Symptoms Section-->




@endsection
