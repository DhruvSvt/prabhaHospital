@extends('visitors.layouts.visitorsApp',['title' => 'Piles'])
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


      <section id="about" class="section-padding bg-gray">
          <div class="auto-container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>Specialised center for <span>Advanced Piles Treatment</span>
                      </h3>
                      <p>Prabha Hospital is a multi-speciality healthcare provider which aims to deliver a hassle-free surgical experience to all patients by leveraging technology, and a set of advanced operations and powerful processes.
                      </p>
                      <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                     <a href="{{ route('doctors-appointment') }}" style="    line-height: 2;max-width: 323px;" class="btn btn-apfm">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                      <img src="assets/img/piles-patient.jpeg"
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
                  <!--	<img src="assets/img/piles-patient.jpeg" -->
                  <!--	style="height:80%; width:80%; border-radius: 12px">-->
                  <!--</div>-->
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                      <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                      <h3>What is <span>Piles?</span>
                      </h3>
                      <p>Piles are also called hemorrhoids. These are a cluster of blood vessels, veins, muscles, elastic fibers, and inflamed
                      tissues in the anal area. Regardless of age and sex, any individual can get affected by different types of piles like
                      grade-1, 2, 3, and 4. Pregnant women can also develop piles as a result of excessive pressure in the lower body. However,
                      more commonly, piles/hemorrhoids are noticed in people with poor diet [low fiber foods], unhygienic lifestyle, and unsanitary
                      washroom habits. Many people can get confused between piles, fissures, fistulas, and other rectal problems. So, we recommend
                      you to have a consultation with our best proctologists to get diagnosed from which type of anal disease you are suffering from.
                      </p>

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
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Anemia</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Fecal Incontinence</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Blood Clots</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Infection of tissues</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Strangulation/gangrene (In severe cases)</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Abscess formation (In severe cases)</h6></li>
                                          <li><h6><i class="icofont icofont-long-arrow-right mr-2"></i>Tissue death (In severe cases)</h6></li>
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
                  <!-- end section title -->
              </div>
              <div class="row">
                  <div class="col text-center mx-auto">
                      <img src="assets/img/chronic-constipation.jpg" class="piles-cause" alt="Chronic constipation">
                      <div class="card-body text-center mx-auto">
                          <p class="card-text cause-caption">Chronic constipation</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/chronic-diarrhoea.jpg" class="piles-cause" alt="Chronic diarrhoea">
                      <div class="card-body">
                          <p class="card-text cause-caption">Chronic diarrhoea</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/Lifting-heavy-weights.jpg" class="piles-cause" alt="Lifting heavy weights">
                      <div class="card-body">
                          <p class="card-text cause-caption">Lifting heavy weights</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/obessity.jpg" class="piles-cause" alt="Obesity">
                      <div class="card-body">
                          <p class="card-text cause-caption">Obesity</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/straining-too-much-while-bowl-movement.jpg" class="piles-cause" alt="Straining too much while bowel movement">
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
                      <img src="assets/img/Excessive Bleeding.jpg" class="piles-cause" alt="Excessive Bleeding">
                      <div class="card-body text-center mx-auto">
                          <p class="card-text cause-caption">Excessive Bleeding</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/Minimal pain.jpg" class="piles-cause" alt="Minimal Anal pain">
                      <div class="card-body">
                          <p class="card-text cause-caption">Minimal Anal pain</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/Pain during bowel movementsurination.jpg" class="piles-cause" alt="Painful bowel movements">
                      <div class="card-body">
                          <p class="card-text cause-caption">Painful bowel movements</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/Itching.jpg" class="piles-cause" alt="Swelling & Itching">
                      <div class="card-body">
                          <p class="card-text cause-caption">Swelling & Itching</p>
                      </div>
                  </div>
                  <div class="col text-center mx-auto">
                      <img src="assets/img/Discomfort while sitting.jpg" class="piles-cause" alt="Discomfort while sitting">
                      <div class="card-body">
                          <p class="card-text cause-caption">Discomfort while sitting</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--END Symptoms Section-->
@endsection
