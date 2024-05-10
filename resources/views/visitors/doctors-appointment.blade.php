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
            <form action="#">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" required placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" required placeholder="Your last name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Phone No</label>
                    </div>
                    <div class="col-75">
                       <input type="text" id="phone" name="phone" required placeholder="Your phone number..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Date</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="phone" name="date" required placeholder="Your phone number..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">City</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="city" name="city" required placeholder="Your city..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Departments</label>
                    </div>
                    <div class="col-75">
                        <select id="country" name="country">
                            <option value="">Please select department</option>
                            <option value="neurology">Neurology</option>
                            <option value="urology">Urology</option>
                            <option value="gastroenterology">Gastroenterology</option>
                            <option value="obstetrics and gynecology">Obstetrics and Gynecology</option>
                            <option value="icu">ICU</option>
                            <option value="nicu">NICU</option>
                            <option value="surgery department">Surgery Department</option>
                            <option value="gastrointestinal surgery">gastrointestinal surgery</option>
                            <option value="pharmacy services">Pharmacy Services</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Doctor's</label>
                    </div>
                    <div class="col-75" style="margin-bottom: 16px;">
                        <select id="country" name="country">
                            <option value="">Select Your Doctor</option>
                            <option value="dr. b. k. singh">Dr. B. K. Singh</option>
                            <option value="dr. priyank singh">Dr. Priyank Singh</option>
                            <option value="dr. priyank singh">Dr. Shilpi Dhakre</option>
                            <option value="dr. priyank singh">Dr. Shivangi Goyal</option>
                            <option value="dr. priyank singh">Dr. Kartikey Sharma</option>
                            <option value="dr. priyank singh">Dr. Shalini Sharma</option>
                            <option value="dr. priyank singh">Dr. S.K. Gupta</option>
                            <option value="dr. priyank singh">Dr. Vijay Tyagi</option>
                            <option value="dr. priyank singh">Dr. Deepshikha</option>
                            <option value="dr. priyank singh">Dr. Vijay Pal Singh</option>
                            <option value="dr. priyank singh">Dr. Rahul Sahai</option>
                            <option value="dr. priyank singh">Dr. Alok Gupta</option>
                            <option value="dr. priyank singh">Dr. Jitendra Srivastava</option>
                            <option value="dr. priyank singh">Dr. Premashish Majumdar</option>
                            <option value="dr. priyank singh">Dr. Anshuman Roy</option>
                            <option value="dr. priyank singh">Dr. Virtul Gupta</option>

                        </select>
                    </div>
                </div>
           <input type="submit" value="Submit">
            </form>
        </div>

    <!--- END CONTAINER -->
</section>
@endsection
