@extends('visitors.layouts.visitorsApp',['title' => 'Cardiology'])
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
    <div class="auto-container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->
                <h3>Most Advanced <span> Cardiology Center</span>
                </h3>
                <p>We are specialize in the treatment of the cardiovascular system—which includes the heart and blood vessels. We also educate habits that promote heart health.
                </p>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="assets\img\departments\cardology.jpg"
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
            <!--	<img src="assets/img/piles-patient.jpeg" -->
            <!--	style="height:80%; width:80%; border-radius: 12px">-->
            <!--</div>-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5 about-us-into">
                <!--<h6>Since 1990 - 2020, Battery Park, New York</h6>-->


                <h4>Who is an Cardiologist Surgeon?</h4>
                <p>Cardiologists are qualified to treat heart attacks, heart failure, heart valve disease, arrhythmia, and high blood pressure. Cardiologists work in hospitals as well as private practices.
<br>
To make a diagnosis, cardiologists may give physical exams, order tests — such an electrocardiogram (EKG), blood tests, exercise stress tests — as well as interpret tests. They may also prescribe medicine, recommend lifestyle changes such as diet, exercise, reducing stress levels and managing weight. Cardiologists can perform procedures such as implanting a pacemaker or inserting a cardiac catheter.</p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
@endsection
