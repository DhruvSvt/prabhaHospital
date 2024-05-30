@extends('visitors.layouts.visitorsApp',['title' => 'Doctors-Appointment'])
@section('content')
<section class="section-padding bg-color">
    <div class="auto-container mt-2 mb-2 text-center">
        <h1 class="heading">Doctor's Appointment</h1>
    </div>
</section>
<section class="section-padding">
    <div class="auto-container mt-5">
        <div class="row">
            <div class="col text-center">
                <!--<img src="assets/img/157A7094.jpg" style="height:80%; width:80%; border-radius: 12px">-->
                <div class="mt-1">
                    <h3><span>Book Your Appointment</span></h3>
                    <h4 class="text-center"  style="color: red; font-size: 17px; margin-top: 15px;" >Please don't book any doctor's appointments on SUNDAY</h4>
                    <hr>
                </div>
            </div>
        </div>
      <div class="container">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row1">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <!--- END CONTAINER -->
</section>
@endsection
