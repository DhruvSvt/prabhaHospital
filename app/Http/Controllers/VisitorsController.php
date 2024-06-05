<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Departments;
use App\Models\Doctor_Category;
use App\Models\testimonial_Videos;
use App\Models\Doctors;
use App\Models\Post;
use App\Models\Contact_enquiry;
use App\Models\Appointments;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Departments::where('status', 1)->orderBy('orders', 'ASC')->limit(8)->get();
        $doctors = Doctors::where('status', 1)->orderBy('orders', 'ASC')->limit(8)->get();
        $data = Gallery::latest()->limit(8)->get();
        $title = 'Home';
        return view('visitors.index', compact('data', 'title', 'departments', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function department(Request $request)
    {
        $slug = $request->slug;
        $data = Departments::where('slug', $slug)->first();
        $departments = Departments::where('status', 1)->orderBy('orders', 'ASC')->get();
        $title = $data->title;
        $department_id = $data->id;
        $doctors = Doctors::where('department_id', $department_id)->where('status', 1)->get();
        return view('visitors.department', compact('data', 'title', 'doctors', 'departments'));
    }
    public function doctor(Request $request)
    {
        $slug = $request->slug;
        $data = Doctors::where('slug', $slug)->first();
        $cats = Doctor_Category::orderBy('name', 'ASC')->get();
        $doctors = Doctors::where('status', 1)->where('category_id', $data->category_id)->orderBy('orders', 'ASC')->get();
        $title = $data->name;
        return view('visitors.doctor', compact('data', 'title', 'cats', 'doctors'));
    }
    public function doctors()
    {
        $data = Doctors::where('status', 1)->orderBy('orders', 'ASC')->get();
        $cats = Doctor_Category::orderBy('name', 'ASC')->get();
        $title = 'Our Doctors';
        return view('visitors.doctors', compact('data', 'title', 'cats'));
    }
    public function patientfeedback()
    {
        $data = testimonial_Videos::where('status', 1)->orderBy('orders', 'ASC')->get();

        $title = 'Patients Feedback';
        return view('visitors.patientfeedback', compact('data', 'title'));
    }
    public function doctors_cat(Request $request)
    {
        $slug = $request->slug;
        $cat = Doctor_Category::where('slug', $slug)->first();
        $data = Doctors::where('status', 1)->where('category_id', $cat->id)->orderBy('orders', 'ASC')->get();
        $cats = Doctor_Category::orderBy('name', 'ASC')->get();
        $title = $cat->name.' Doctors';
        $category = $cat->name;
        return view('visitors.doctors', compact('data', 'title', 'cats', 'category'));
    }
    public function blogs()
    {
        $posts = Post::where('status', 'PUBLISHED')->latest()->get();
        $featured = Post::where('featured', '1')->where('status', 'PUBLISHED')->latest()->skip(0)->take(10)->get();
        $title = 'Our Blogs';
        return view('visitors.blogs', compact('title', 'posts', 'featured'));
    }
    public function blog(Request $request)
    {
        $slug = $request->slug;
        $post = Post::where('slug', $slug)->first();
        $featured = Post::where('featured', '1')->where('status', 'PUBLISHED')->latest()->skip(0)->take(10)->get();

        return view('visitors.blog', compact('post', 'featured'));
    }
    public function appointment()
    {
        $doctors = Doctors::where('status', 1)->orderBy('name', 'ASC')->get();
        return view('visitors.doctors-appointment', compact('doctors'));
    }

    public function enquiryStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $brand = new Contact_enquiry;
        $brand->name = $request->name;
        $brand->email = $request->email;
        $brand->phone = $request->phone;
        $brand->subject = $request->subject;
        $brand->message = $request->message;
        $brand->save();

        return redirect()->back()->with('success', 'Enquiry Received successfully.');
    }
    public function appointmentStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $brand = new Appointments;
        $brand->name = $request->name;
        $brand->email = $request->email;
        $brand->phone = $request->phone;
        $brand->date = $request->date;
        $brand->time = $request->time;
        $brand->city = $request->city;
        $brand->doctor = $request->doctor;
        $brand->save();

        return redirect()->back()->with('success', 'Appointment Received successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
