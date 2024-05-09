@extends('visitors.layouts.visitorsApp',['title' => 'Patients-Feedback'])
@section('content')
<section class="section-padding bg-color">
    <div class="auto-container mt-2 mb-2 text-center">
        <h1 class="heading">Patient's Feedback</h1>
    </div>
</section>

<section id="connect" class="whatnew_sec">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Meet Our Doctors</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="media_coverage_title">
                    <!--<h5 class="fs-4 fw-bold">Apollo In The News</h5>-->
                </div>

                <div id="slider_apollo_in_the_news" class="news-section-slider owl-carousel">
{{--
                    @foreach ($doctors as $item) --}}
                    <div class="news_slide_wrap">
                        <div class="card pg-card">
                            {{-- <a href="#"><img src="{{ Voyager::image($item->image) }}" class="card-img-top"
                                    alt="Doctors at GR Hospital."></a> --}}
                                    <a href="#"><img src="" class="card-img-top" alt="Patients-Feedback"></a>
                            <div class="card-body">
                                {{-- <h5><a href="#">{{ $item->name }}</a></h5>
                                <p class="card-text">{{ $item->speciality }}</p>
                                <p class="card-text">{{ $item->qualification }}</p> --}}
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <a href="#" class="text-warning fs-6">View All <i
                        class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>


    </div>
</section>
@endsection
