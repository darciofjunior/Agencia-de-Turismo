<!DOCTYPE html>
<html>
	<head>
		<title>Panel EspecializaTi</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!--Fonts-->
		<link rel="stylesheet" href="{{url('assets/panel/css/font-awesome.min.css')}}">

		<!--CSS Person-->
		<link rel="stylesheet" href="{{url('assets/panel/css/especializati.css')}}">
		<link rel="stylesheet" href="{{url('assets/panel/css/especializati-reset.css')}}">

		<!--Favicon-->
		<link rel="icon" type="image/png" href="{{url('assets/panel/imgs/favicon.png')}}">
	</head>
<body>

<section class="menu">
	
	<div class="logo">
		<img src="{{url('assets/panel/imgs/icone-especializati.png')}}" alt="EspecializaTi" class="logo-painel">
	</div>

	<div class="list-menu">
		<ul class="menu-list">
			<li>
				<a href="?pag=home">
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</a>
			</li>

			<li>
				<a href="{{route('brands.index')}}">
					<i class="fa fa-university" aria-hidden="true"></i>
					Brands
				</a>
			</li>

			<li>
				<a href="{{route('planes.index')}}">
					<i class="fa fa-plane" aria-hidden="true"></i>
					Planes
				</a>
			</li>

			<li>
				<a href="{{route('states.index')}}">
					<i class="fa fa-globe" aria-hidden="true"></i>
					States
				</a>
			</li>

			<li>
				<a href="{{route('flights.index')}}">
					<i class="fa fa-fighter-jet" aria-hidden="true"></i>
					Flights
				</a>
			</li>

			<li>
				<a href="{{route('users.index')}}">
					<i class="fa fa-users" aria-hidden="true"></i>
					Users
				</a>
			</li>

			<li>
				<a href="{{route('reserves.index')}}">
					<i class="fa fa-check-square" aria-hidden="true"></i>
					Reserves
				</a>
			</li>
		</ul>
	</div>

</section><!--End Menu-->

<section class="content">
	<div class="top-dashboard">
		
		<div class="dropdown user-dash">
		  <div class="dropdown-toggle" id="dropDownCuston" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			@if( auth()->user()->image )
				<img src="{{ url('users/'.auth()->user()->image)}}" alt="{{ auth()->user()->name }}" class="user-dashboard img-circle">
			@else
				<img src="{{url('assets/site/images/no-image.png')}}" alt="{{ auth()->user()->name }}" class="user-dashboard img-circle">
			@endif

		    <p class="user-name">{{ auth()->user()->name }}</p>
		    <span class="caret"></span>
		  </div>
		  <ul class="dropdown-menu dp-menu" aria-labelledby="dropDownCuston">
		    <li><a href="{{ route('my.profile') }}">Perfil</a></li>
		    <li><a href="{{ route('logoutProfile') }}">Logout</a></li>
		  </ul>
		</div>
	</div><!--Top Dashboard-->

	<div class="content-ds">

		@yield('content')


	</div><!--End Content DS-->

</section><!--End Content-->

	

	<!--jQuery-->
	<script src="{{url('assets/panel/js/jquery-3.1.1.min.js')}}"></script>

	<!-- jS Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>