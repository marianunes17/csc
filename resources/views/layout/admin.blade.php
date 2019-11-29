<!doctype html>
<html>
	<head>
		<title>CSC</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,
			maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet"
			href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet"
			href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
		<link rel="stylesheet"
			href="{{asset('vendor/chartist/css/chartist-custom.css')}}">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
		<link rel="stylesheet" href="css/demo.css">
		<!-- GOOGLE FONTS -->
		<link
			href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700"
			rel="stylesheet">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96"
			href="{{asset('img/favicon.png')}}">
	</head>

	<body>
		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<div class="sidebar-scroll">
					<nav>
						<ul class="nav">
							<li><a href="{{asset('index.html')}}" Z><i class="lnr lnr-home"></i>
									<span>Dashboard</span></a></li>

							<li><a href="{{route('eventos.index')}}"><i class="lnr lnr-home"></i>
									<span>Lista de eventos</span></a></li>
							<li><a href="{{route('eventos.create')}}"><i class="lnr lnr-home"></i>
									<span>Adicionar eventos</span></a></li>



							<li><a href="{{asset('elements.html')}}" class=""><i class="lnr
										lnr-code"></i> <span>Elements</span></a></li>
							<li><a href="{{asset('charts.html')}}" class=""><i class="lnr
										lnr-chart-bars"></i> <span>Charts</span></a></li>
							<li><a href="{{asset('panels.html')}}" class=""><i class="lnr lnr-cog"></i>
									<span>Panels</span></a></li>
							<li><a href="{{asset('notifications.html')}}" class=""><i class="lnr
										lnr-alarm"></i> <span>Notifications</span></a></li>
							<li>
								<a href="#subPages" data-toggle="collapse" class="collapsed"><i
										class="lnr lnr-file-empty"></i> <span>Pages</span> <i
										class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse">
									<ul class="nav">
										<li><a href="{{asset('page-profile.html')}}" class="">Profile</a></li>
										<li><a href="{{asset('page-login.html')}}" class="">Login</a></li>
										<li><a href="{{asset('page-lockscreen.html')}}" class="">Lockscreen</a></li>
									</ul>
								</div>
							</li>
							<li><a href="{{asset('tables.html')}}" class=""><i class="lnr lnr-dice"></i>
									<span>Tables</span></a></li>
							<li><a href="{{asset('typography.html')}}" class=""><i class="lnr
										lnr-text-format"></i> <span>Typography</span></a></li>
							<li><a href="{{asset('icons.html')}}" class=""><i class="lnr
										lnr-linearicons"></i> <span>Icons</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- END LEFT SIDEBAR -->
			<!-- MAIN -->
			<div class="main">
				<!-- MAIN CONTENT -->

				<div class="container-fluid">

					<!-- End of Topbar -->
					@if ($errors->any())
					@include ('partials.errors')
					@endif
					@if (!empty(session('success')))
					@include ('partials.success')
					@endif
					<!-- Begin Page Content -->
					@yield("content")


				</div>
				<!-- END MAIN CONTENT -->


			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com"
							target="_blank">Theme I Need</a>. All Rights Reserved.</p>
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
		<script
			src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('vendor/chartist/js/chartist.min.js')}}"></script>
		<script src="{{asset('scripts/klorofil-common.js')}}"></script>

	</body>

</html>
