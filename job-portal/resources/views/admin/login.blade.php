<!doctype html>
<html lang="en">

<!-- login35:56-->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<title>Job Stock - Responsive Job Portal Bootstrap Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('front/plugins/css/plugins.css') }}">
    
    <!-- Custom style -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
	<link type="text/css" rel="stylesheet" id="jssDefault" href="{{ url('front/css/colors/green-style.css') }}">
    
	</head>
	<body class="simple-bg-screen" style="background-image:url(img/banner-10.jpg);">
		<div class="Loader"></div>
		<div class="wrapper">  

			<!-- Title Header Start -->
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
						<a href="index-2.html"><img src="{{url('front/img/logo.png')}}" class="img-responsive" alt=""></a>
						@if(Session::has('error_message'))
							<div class="text-center text-danger" style="margin-bottom: 10px; margin-top: 0;">
	  							<strong>Error: </strong>{{Session::get('error_message')}}
							</div>
						@endif
						@if ($errors->any())
						    <div class="text-center text-danger" style="margin-bottom: 10px; margin-top: 0;">
		  						<strong>Error: </strong>Enter a valid email and Password!      
						    </div>
						@endif
						<form action="{{url('admin/login')}}" method="post">
							@csrf
							<input type="text" name="email" id="email" class="form-control" placeholder="Email address">
							<input type="password" name="password" id="password" class="form-control" placeholder="Enter password" >
							<button class="btn btn-login" type="submit">Login</button>
							<span>You Have No Account? <a href="signup.html"> Create An Account</a></span>
							<span><a href="lost-password.html"> Forget Password</a></span>
						</form>
					</div>
				</div>
			</section>

			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="{{ url('front/plugins/js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/viewportchecker.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/bootstrap.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/bootsnav.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/select2.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/wysihtml5-0.3.0.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/bootstrap-wysihtml5.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/datedropper.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/dropzone.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/loader.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/owl.carousel.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/slick.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/gmap3.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('front/plugins/js/jquery.easy-autocomplete.min.js') }}"></script>
			
			<!-- Custom Js -->
			<script src="{{ url('front/js/custom.js') }}"></script>
			<script src="{{ url('front/js/jQuery.style.switcher.js') }}"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
		</div>
	</body>

<!-- login35:58-->
</html>