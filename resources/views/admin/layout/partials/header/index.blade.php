<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
	<meta name="author" content="ParkerThemes">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="shortcut icon" href="{{asset('assets/dashboard')}}/img/fav.png" />
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

	<!-- Title -->
	<title>@yield('title', setting('site_name'))</title>
	<!-- *************
			************ Common Css Files *************
		************ -->

	{{-- Craftable style --}}
	{{--
	<link href="{{ asset('/css/admin.css') }}" rel="stylesheet"> --}}
	<!-- font awesome css -->
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/font-awesome.min.css">

	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/droid-arabic-kufi" type="text/css" />
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/bootstrap.min.css">

	<!-- Icomoon Font Icons css -->
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/fonts/style.css">

	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/main.css">
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/css/custom.css">



	<!-- *************
			************ Vendor Css Files *************
		************ -->
	<!-- DateRange css -->
	<link rel="stylesheet" href="{{asset('assets/dashboard')}}/vendor/daterange/daterange.css" />



</head>

<body>

	<!-- Loading starts -->
	<div id="loading-wrapper">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Loading ends -->


	<!-- *************
			************ Header section start *************
		************* -->

	@include('admin.layout.partials.header.partials.header')

	<!-- Screen overlay start -->
	<div class="screen-overlay"></div>
	<!-- Screen overlay end -->



	@include('admin.layout.partials.header.partials.quick links box')

	@include('admin.layout.partials.header.partials.quick settings')

	<!-- *************
			************ Header section end *************
		************* -->