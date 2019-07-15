<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title> Admin Panel</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
			<link id="bootstrap-style" href="{{asset('Admin/css/bootstrap.min.css')}}" rel="stylesheet">
			<link href="{{asset('Admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
			<link id="base-style" href="{{asset('Admin/css/style.css')}}" rel="stylesheet">
			<link id="base-style-responsive" href="{{asset('Admin/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Admin</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Zakir Hossain
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="{{URL::to('/home')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> LogOut</span></a></li>
								</li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						<li><a href="{{URL::to('/addcontract')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Add Contract</span></a></li>

						<li><a href="{{URL::to('/allcontract')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> All Contract</span></a></li>
						
						
					</ul>
				</div>
			</div>

		<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">

				@yield('content')
 

			</div>
	</div>	
	
		
	
	
	<!-- start: JavaScript-->

		<script src="{{asset('Admin/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('Admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.ui.touch-punch.j')}}s"></script>
	
		<script src="{{asset('Admin/js/modernizr.js')}}"></script>
	
		<script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('Admin/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('Admin/js/excanvas.js')}}"></script>
	<script src="{{asset('Admin/js/jquery.flot.js')}}"></script>
	<script src="{{asset('Admin/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('Admin/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('Admin/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('Admin/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('Admin/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('Admin/js/counter.js')}}"></script>
	
		<script src="{{asset('Admin/js/retina.js')}}"></script>

		<script src="'{{asset('Admin/js/custom.js')}}'"></script>
		<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>

<script>
        $(document).on("click", "#delect", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm('Are you want to Delect!!',function(confirmed){

            	if (confirmed) {
            		window.location.href = link;
            	};
             });
        });
    </script>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
