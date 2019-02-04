@extends('layouts.base')

@section('title')
Himasif Repository
@endsection

@section('contents')
<section class="banner-area relative">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen justify-content-center align-items-center">
			<div class="col-lg-8">
				<div class="banner-content text-center">
					<p class="text-uppercase text-white">Temukan refrensi untuk projectmu di</p>
					<h1 class="text-uppercase text-white">Himasif Repository</h1>
					<a href="#" class="primary-btn banner-btn">Go to Repository</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<!-- Start About Area -->
<section class="section-full gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title text-center">
					<p class="text-uppercase">Apa itu Himasif Repository</p>
					<h3><b>Himasif Repository</b> adalah tempat kumpulan project yang telah dikerjakan oleh mahasiswa <b>Sistem Informasi Universitas Jember</b> yang dapat digunakan sebagai refrensi</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<figure class="signle-service">
					<img src="img/s1.jpg" class="img-fluid" alt="">
					<figcaption class="text-center">
						<h5 class="text-uppercase">Project Review</h5>
						<p>Penjelasan project dari Himasif Repository secara singkat</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="signle-service">
					<img src="img/s2.jpg" class="img-fluid" alt="">
					<figcaption class="text-center">
						<h5 class="text-uppercase">Source Code</h5>
						<p>Anda dapat melihat Source Code dari Himasif Repository yang ada</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="signle-service">
					<img src="img/s3.jpg" class="img-fluid" alt="">
					<figcaption class="text-center">
						<h5 class="text-uppercase">Download</h5>
						<p>Anda dapat mengunduh project dari Himasif Repository secara gratis</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- End About Area -->
<!-- Start Product Area -->
<section id="services" class="title-bg section-full">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="product-area-title text-center">
					<p class="text-white text-uppercase">Himasif Repository</p>
					<h2 class="text-white h1">Project apa saja yang terdapat pada Himasif Repository?</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="single-product">
					<div class="icon">
						<span class="lnr lnr-code"></span>
					</div>
					<div class="desc">
						<h4>Pemrograman</h4>
						<p>Semester 1 - 4</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-product">
					<div class="icon">
						<span class="lnr lnr-sun"></span>
					</div>
					<div class="desc">
						<h4>Desain Perangkat Lunak</h4>
						<p>Semester 3 - 5</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-product">
					<div class="icon">
						<span class="lnr lnr-screen"></span>
					</div>
					<div class="desc">
						<h4>Aplikasi Perangkat Lunak</h4>
						<p>Semester 5 - 6 </p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="single-product">
					<div class="icon">
						<span class="lnr lnr-magic-wand"></span>
					</div>
					<div class="desc">
						<h4>Desain Grafis</h4>
						<p>Semester 5</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Area -->
<!-- Start Cta Area -->
<section class="cta-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 d-flex no-flex-xs justify-content-between align-items-center">
				<h5 class="text-uppercase text-white">Jika anda mempunyai arsip project yang telah dikerjakan silahkan submit project anda sebagai arsip</h5>
				<a href="#" class="primary-btn d-inline-flex text-uppercase text-white align-items-center">Submit<span class="lnr lnr-arrow-right"></span></a>
			</div>
		</div>
	</div>
</section>
<!-- End Cta Area -->
@endsection
