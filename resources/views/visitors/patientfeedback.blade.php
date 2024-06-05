@extends('visitors.layouts.visitorsApp', ['title' => $title])
@section('content')

@php

function getYoutubeEmbedUrl($url)
{
     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id ;
}

@endphp
    <section class="single-page-title-area bg-color">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="single-page-title">
                        <h2 style="color: #fff;">{{ $title }}</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span
                                    class="icofont
                                icofont-ui-home"></span></a></li>

                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
            <!-- end row-->
        </div>
    </section>

    <section id="singledoctor" class="section-padding doctor-page">
        <div class="auto-container">

                    <div class="related_doc_widget">
                        <div class="row">
                            @foreach ($data as $row)
                                <div class="col-lg-4">
                                    <div class="">
                                      @php
                                         echo '<iframe width="100%" height="240" src="'.getYoutubeEmbedUrl($row->link).'" allowfullscreen="" controls="0" autoplay="0" frameborder="0" scrolling="no"></iframe>';
                                      @endphp
                                        <h5 class="blog-recTitle">
                                           {{$row->title}}
                                        </h5>

                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>

        <!--- END CONTAINER -->
    </section>
@endsection
