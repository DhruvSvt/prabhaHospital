@extends('visitors.layouts.visitorsApp',['title' => 'Plastic-Surgries'])
@section('content')
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
                <h3>Consult with Best Plastic Surgeons at <span> Prabha Hospital </span>
                </h3>
                <p>Get advanced treatment from the best plastic surgeons.
                Visit Prabha Hospital to undergo advanced and minimally invasive cosmetic procedures at cost-effective prices.
                Enhance your physical appearance and get treatment for medical conditions that affect the aesthetics.
                Visit the nearest clinic and undergo cataract surgery to regain your vision.
                </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                  Book Consultation<i class="icofont icofont-caret-right"></i>
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pr-lg-8 pr-md-8 pr-sm-0 pr-0 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                <img src="assets/img/diseases/nurses-patients-care-procedures.webp"
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
                <h3>What is <span> Plastic Surgery?</span>
                </h3>
                <p>Plastic surgery is a specialty that focuses on restoring, reconstructing, and altering the human body in some way. Plastic surgery is mainly divided into two main categories, i.e., reconstructive surgery and cosmetic surgery. .</p>

                <p>While reconstructive surgery involves craniofacial surgery, hand surgery, microsurgery, treatment of burns, etc. cosmetic surgery is done for improvement of the existing features. .</p>

                <p>If you have been diagnosed with a cataract in one or both eyes,
                you can contact Pristyn Care and get advanced treatment for all types of cataracts. </p>
                <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>-->

                <h4>Who are Plastic Surgeons?</h4>
                <p>Plastic surgeons are doctors who specialize in both reconstructive and cosmetic procedures. Some plastic surgeons also choose to become cosmetic surgeons and perform only the procedures that change a person’s aesthetic appearance. However, you should know that not all plastic surgeons are cosmetic surgeons. </p>
                <p>Cosmetic surgeons are the doctors who opt for an Aesthetics fellowship after completing their residency studies. If you wish to change the way you look, you can contact any physician that is legally allowed to perform cosmetic surgeries. </p>
            </div>
        </div>
    </div>
    <!--- END CONTAINER -->
</section>
<!--START Causes Section-->
<section class="section-padding mt-7" >
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h4>Aesthetics</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Breast-Lift---Breast-augmentation.jpg" alt="Aging">
                <!--<div class="card-body text-center mx-auto">-->
                <!--    <p class="card-text cause-caption">Aging</p>-->
                <!--</div>-->
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Gynecomastia-{Male-Oriented}.jpg"  alt="Smoking">
                <!--<div class="card-body">-->
                <!--    <p class="card-text cause-caption">Smoking</p>-->
                <!--</div>-->
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Liposuction-{-Female-Oriented-}.jpg" alt="Ultraviolet radiation">
                <!--<div class="card-body">-->
                <!--    <p class="card-text cause-caption">Ultraviolet radiation</p>-->
                <!--</div>-->
            </div>
            <div class="col text-center mx-auto">
                <img src="assets/img/diseases/Hair-Transplant.jpg"  alt="Hypertension">
                <!--<div class="card-body">-->
                <!--    <p class="card-text cause-caption">Hypertension</p>-->
                <!--</div>-->
            </div>
            <!--<div class="col text-center mx-auto">-->
            <!--    <img src="assets/img/diseases/Diabetes.jpg" class="piles-cause" alt="Diabetes">-->
                <!--<div class="card-body">-->
                <!--    <p class="card-text cause-caption">Diabetes</p>-->
                <!--</div>-->
            <!--</div>-->
        </div>
        <!--<div class="row">-->
        <!--    <div class="col text-center mx-auto">-->
<!--                 <img src="assets/img/diseases/Obesity.jpg" class="piles-cause" alt="Obesity">-->
<!--                 <div class="card-body text-center mx-auto">-->
<!--                     <p class="card-text cause-caption">Obesity</p>-->
<!--                 </div>-->
<!--             </div>-->
<!--             <div class="col text-center mx-auto">-->
<!--                 <img src="assets/img/diseases/High alcohol consumption.jpg" class="piles-cause" alt="High alcohol consumption">-->
<!--                 <div class="card-body">-->
<!--                     <p class="card-text cause-caption">High alcohol consumption</p>-->
<!--                 </div>-->
<!--             </div>-->
<!--             <div class="col text-center mx-auto">-->
<!--                 <img src="assets/img/diseases/High myopia.jpg" class="piles-cause" alt="High myopia">-->
<!--                 <div class="card-body">-->
<!--                     <p class="card-text cause-caption">High myopia</p>-->
<!--                 </div>-->
<!--             </div>-->
<!--             <div class="col text-center mx-auto">-->
<!--                 <img src="assets/img/diseases/Previous eye surgery.jpg" class="piles-cause" alt="Previous eye surgery">-->
<!--                 <div class="card-body">-->
<!--                     <p class="card-text cause-caption">Previous eye surgery</p>-->
<!--                 </div>-->
<!--             </div>-->
        <!--</div>-->
    </div>
</section>
@endsection
