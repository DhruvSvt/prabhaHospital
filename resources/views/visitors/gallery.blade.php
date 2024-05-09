@extends('visitors.layouts.visitorsApp',['title' => $title])
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
@endsection
@section('content')
<section class="section-padding bg-color">
    <div class="auto-container mt-2 mb-2 text-center">
        <h1 class="heading">Our Gallery</h1>
    </div>
</section>

<section id="about" class="section-padding bg-gray">
    <div class="auto-container mt-5 mb-5">
        <div class="row">
            @foreach ($data as $row)
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <a href="{{ Voyager::image($row->image) }}" data-fancybox=" gallery" data-caption="">
                    <img src="{{ Voyager::image($row->image) }}" class="w-100 shadow-1-strong rounded mb-4"
                        alt="Image Gallery">
                </a>

            </div>
            @endforeach




        </div>
    </div>
    @endsection
    @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        // Fancybox Config
    $('[data-fancybox="gallery"]').fancybox({
    buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
    ],
    loop: false,
    protect: true
    });
    </script>
    @endsection
