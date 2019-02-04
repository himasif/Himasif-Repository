<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="CodePixar">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
	<div id="top"></div>

	<!-- Start of Header -->
  @include('includes.header')
  <!-- End of Header -->

  <!-- Start of content area -->
  @yield('contents')
  <!-- End of content area -->

  <!-- Start of Footer -->
  @include('includes.footer')
  <!-- End of Footer -->

	<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/mixitup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
