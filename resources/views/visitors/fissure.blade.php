@extends('visitors.layouts.visitorsApp',['title' => 'Fissure'])
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
          <div class="auto-container mt-5">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>Most Effective and Painless Treatment for <span> Anal Fissure </span>
                      </h3>
                      <p>Get the most advanced, effective, and painless permanent laser-assisted treatment for anal fissure in a daycare procedure.
                      </p>
                      <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Book Consultation<i class="icofont icofont-caret-right"></i>
                      </button>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                      <img src="https://prabha-hospital.com/assets/img/fissure.webp"
                      style="height:80%; width:80%; border-radius: 12px">
                  </div>
              </div>
          </div>
          <!--- END CONTAINER -->
      </section>


      <section class="section-padding">
          <div class="auto-container">
              <div class="row">
               <!--   <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">-->
                  <!--	<img src="https://prabha-hospital.com/assets/img/piles-patient.jpeg" -->
                  <!--	style="height:80%; width:80%; border-radius: 12px">-->
                  <!--</div>-->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>What is anal <span> fissure?</span>
                      </h3>

                      <p>An anal fissure is a condition where a small tear or cut is formed in the thin and moist lining of the anus.
                      This can be a crack in or around the anal area as well. One of the main reasons or causes for anal fissures is
                      the passage of hard and large stools during bowel movements.</p>
                      <p>Due to an anal fissure, you can suffer from severe pain and bleeding of bright red blood during and after
                      bowel movements. In a few cases, anal fissures can go deep and expose the muscle tissue present beneath them.
                      You can even experience anal sphincter spasms [ring of muscle at the end of your anus.</p>
                      <p>Delaying or avoiding anal fissure treatment can lead to some severe complications.
                      To get diagnosed for anal fissures and undergo the best and safest anal fissure surgery
                      at your nearest location, you can visit Pristyn Care or book an appointment with our anal
                      fistula doctors [proctologists]</p>
                      <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                  </div>
              </div>
          </div>
          <!--- END CONTAINER -->
      </section>

      <!--START Tags Section -->
      <section id="service" class="section-padding bg-gray mt-7" >
          <div class="container">
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
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Chronic fissure</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Sentinel Pile</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Permanent Skin Tag</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Incontinence</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Fistula</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Anal Stenosis</h6></li>
                                      </ul>

                                  </div>
                              <div id="two" class="tab-pane animated fadeInRight ">
                                      <ul>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>No cuts, no stitches, no scars</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>30-min procedure</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>1-day discharge</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Most effective treatment</h6></li>
                                      </ul>
                              </div>
                              <div id="three" class="tab-pane animated fadeInRight">
                                   <ul>
                                       <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from pain while sitting</h6></li>
                                       <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Relief from bleeding in stool</h6></li>
                                       <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Reduces chances of anal cancer</h6></li>
                                       <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Cures Inflammation in the anal region</h6></li>
                                       <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Treats Rectal Prolapse</h6></li>
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
      <section class="section-padding mt-7" >
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 text-center mx-auto">
                      <div class="section-title">
                          <h4>Causes</h4>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Tight-anal-sphincter.jpg" class="piles-cause" alt="Tight anal sphincter">
                      <div class="card-body text-center mx-auto">
                          <p class="card-text cause-caption">Tight anal sphincter</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Passing large or hard stools frequently.jpg" class="piles-cause" alt="Passing large or hard stools frequently">
                      <div class="card-body">
                          <p class="card-text cause-caption">Passing large or hard stools frequently</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Lifting-heavy-weights.jpg" class="piles-cause" alt="Lifting heavy weights">
                      <div class="card-body">
                          <p class="card-text cause-caption">Lifting heavy weights</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Decreased blood flow to the anal region.jpg" class="piles-cause" alt="Decreased blood flow to the anal region">
                      <div class="card-body">
                          <p class="card-text cause-caption">Decreased blood flow to the anal region</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/straining-too-much-while-bowl-movement.jpg" class="piles-cause" alt="Straining too much while bowel movement">
                      <div class="card-body">
                          <p class="card-text cause-caption">Straining too much while bowel movement</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--END Causes Section-->




      <!--START Symptoms Section-->
      <section class="section-padding bg-gray mt-7" >
          <div class="container">
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
                      <img src="https://prabha-hospital.com/assets/img/Excessive Bleeding.jpg" class="piles-cause" alt="Anal Bleeding">
                      <div class="card-body text-center mx-auto">
                          <p class="card-text cause-caption">Anal Bleeding</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Minimal pain.jpg" class="piles-cause" alt="Rectal pain">
                      <div class="card-body">
                          <p class="card-text cause-caption">Rectal pain</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Cracked skin.jpg" class="piles-cause" alt="Cracked skin">
                      <div class="card-body">
                          <p class="card-text cause-caption">Cracked skin</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Itching.jpg" class="piles-cause" alt="Itchiness">
                      <div class="card-body">
                          <p class="card-text cause-caption">Itchiness</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="https://prabha-hospital.com/assets/img/Small lump or skin tag.jpg" class="piles-cause" alt="Small lump or skin tag">
                      <div class="card-body">
                          <p class="card-text cause-caption">Small lump or skin tag</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--END Symptoms Section-->
@endsection
