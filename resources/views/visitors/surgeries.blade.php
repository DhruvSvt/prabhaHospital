@extends('visitors.layouts.visitorsApp',['Surgeries'])
@section('content')

<section class="section-padding bg-color">
    <div class="auto-container mt-2 mb-2 text-center">
        <h1 class="heading">Surgeries we perform</h1>
    </div>
</section>
<section id="services" class="section-padding bg-gray">
	<div class="container">
		<div class="row">
			{{-- <div class="col-lg-7 text-center mx-auto">
				<div class="section-title">
					<h4>Surgeries we perform</h4> </div>
			</div> --}}

		</div>
		<div class="row mt-4 Surgeries">
			<div class="col">
				<a href="{{ route('piles') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/piles.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Piles</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('fissure') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/fissure.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Fissure</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('fistula') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"> <img src="assets/img/icons/fistula.svg" alt="Prabha hospital"> </div>
					<p class="subTitle weighted_font text_font_size ">Fistula</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('circumcision') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/circumcision.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Circumcision</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('varicoseveins') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/varicose-veins.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Varicose Veins</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('gynecological') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gynaecology.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Gynaecology</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('ent') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/ent.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">ENT</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('gallstone') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gallstone.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Gallstone</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('cataract') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/cataract.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Cataract</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('lasik') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/lasik.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">LASIK</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('hairtransplant') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/hair-transplant.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Hair Transplant</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('gynecosmatia') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gynecosmatia.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Gynecosmatia</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('iuitreatment') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/iui-treatment.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">IUI Treatment</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('appendictics') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/appendicitis.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Appendicitis</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('aclreconstruction') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/acl-reconstruction.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">ACL Reconstruction</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('kidneystones') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/hernia.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Hernia</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('kidneystones') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/kidney-stone.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Kidney Stones</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('ivftreatement') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/ivf-treatment.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">IVF treatment</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('aesthetics') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/gynecosmatia.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Aesthetics</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('carpaltunnel') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/carpel-tunnel.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Carpal Tunnel Syndrome</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('hipreplacement') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/hip-replacement.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Hip Replacement</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('kneereplacement') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/knee-replacement.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Knee Replacement</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('lipoma') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/lipoma.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Lipoma</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('liposuction') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/liposucton.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Liposuction</p>
				</a>
			</div>
			<div class="col">
				<a href="{{ route('orthopedic') }}">
					<div class="img_container flex_box flex_secondary_center flex_primary_center"><img src="assets/img/icons/orthopedics.svg" alt="Prabha hospital"></div>
					<p class="subTitle weighted_font text_font_size ">Orthopedics</p>
				</a>
			</div>
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
@endsection
