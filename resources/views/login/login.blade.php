<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

	<!-- css files -->
	<link href="{{ asset('assets/css/Login/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all">
	<link href="{{ asset('assets/css/Login/css.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- /css files -->
	<!-- online fonts -->
	<link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
	<!-- online fonts -->
	<!-- Custom stlylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<body>
	<div class="container demo-1">
		<div class="content">
			<div id="large-header" class="large-header">
				<h1>Login page</h1>
				<div class="main-agileits">
					<!--form-stars-here-->
					<div class="form-w3-agile">
						<h2>Login</h2>
						
							<div class="alert alert-danger" role="alert">
								@if(session('message'))
								  {{ session('message') }}
								@endif
							</div>
						
						<form action="{{ route('userlogin') }}" method="post">
							@csrf
							<div class="form-sub-w3">
								<input type="email" name="email" placeholder="Email " required="" />
								<div class="icon-w3">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
							</div>
							<div class="form-sub-w3">
								<input type="password" name="password" placeholder="Password" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>

								@if(session('message'))
								<p class="p-bottom-w3ls" style="color: red;">{{ session('message') }}</p>
								@endif
							</div>
							<p class="p-bottom-w3ls"><a class href="#"> Forgot your password?</a></p>
							<p class="p-bottom-w3ls1"><a class href="{{ route('register') }}"> Create a new account</a></p>
							<div class="clear"></div>
							<div class="submit-w3l">
								<input type="submit" value="Login">
							</div>

						</form>
						<div class="social w3layouts">
							<div class="heading">
								<h5>Or Login with</h5>
								<div class="clear"></div>
							</div>
							<div class="icons">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!--//form-ends-here-->
				</div><!-- copyright -->
				<div class="copyright w3-agile">
					<p> © 2017 Đỗ Trí Nam Kiệm | Đăng nhập <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
				</div>
				<!-- //copyright -->
			</div>
		</div>
	</div>

</body>

</html>