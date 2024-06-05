@extends('visitors.layouts.visitorsApp',['title' => $title])
@section('content')
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
                    <li class="breadcrumb-item"><a href="{{ config('app.url') }}"><span class="icofont
                                icofont-ui-home"></span></a></li>

                    <li class="breadcrumb-item active">{{ $title }}</li>
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
					<div class="row">
                        @foreach ($posts as $row)
						<div class="col-lg-6 col-md-6 col-12">
							<div class="single-product">
								<div class="single-product-img">
									<a href="{{route('blog',$row->slug)}}"><img src="{{ Voyager::image($row->image)}}" alt="{{$row->title}}" class="img-fluid" ></a>
								</div>

								<div class="single-product-info-details">
									<div class="single-product-info-left">
										<p>{{date('F j, Y',strtotime($row->created_at))}}</p>
									</div>

									<a href="{{route('blog',$row->slug)}}"><h5>{{$row->title}}</h5></a>
									<div class="single-product-info-rating">
										<p>
                                            {{$row->excerpt}}
										</p>
									</div>
								 </div>
							</div>
						</div>
                        @endforeach

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
