@extends('visitors.layouts.visitorsApp',['title' => $post->title,'description'=>$post->excerpt,'ogImage'=>Voyager::image($post->image)])
@section('content')
<section class="single-page-title-area bg-color">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="single-page-title">
                    <h2 style="color: #fff;">{{ $post->title }}</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>

                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- end row-->
    </div>
</section>
<!-- END PAGE BANNER AND BREADCRUMBS -->


<!-- START SERVICE SECTION -->

<section id="shop" class="section-padding">
        <div class="auto-container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="single-blog mb-3">
						<div class="single-blog-img">
							<div class="entry-mark"></div>
							<img class="img-fluid" src="{{ Voyager::image($post->image)}}" alt="{{$post->title}}">

						</div>
						<div class="single-blog-info mt-5">

							<div class="single-blog-info-detail">
								<a href="#"><h5>{{$post->title}}</h5></a>
								<div class="single-blog-meta">
									<span class="post-date"><i class="fa fa-calendar"></i> {{date('F j, Y',strtotime($post->created_at))}}</span>
								</div>

							 </div>
						</div>
                        <div>{!! $post->body !!}</div>
					</div>

						</div>

				<!-- end col -->
				<aside class="col-lg-4 col-md-4 col-sm-12 col-12 pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">


					<!-- end widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Featured Posts</h5>
						<!-- end widget tittle-->
						<div class="related_doc_widget">
                               @foreach ($featured as $row)
							<div class="blog-singleRecpost">
								<img src="{{ Voyager::image($row->image)}}" alt="{{$row->title}}" class="img-fluid" >

								<h5 class="blog-recTitle">
									<a href="{{route('blog',$row->slug)}}">{{$row->title}}</a>
								</h5>
								<p>{{date('F j, Y',strtotime($row->created_at))}}</p>
								 </div>
                               @endforeach


						</div>
					</div>
					<!-- end widget -->
				</aside>
				<!-- end col -->
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SHOP SECTION -->
<!-- END SERVICE SECTION -->

<!-- SINGLE DOCTOR PROMO -->

<!-- END SINGLE DOCTOR PROMO -->
@endsection
