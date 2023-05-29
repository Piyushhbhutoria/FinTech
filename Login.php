<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Vidusha|Login</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">

		<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
		<meta property="og:title" content="">
		<meta property="og:image" content="">
		<meta property="og:url" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">

		<!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="">

		<!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
		<link href="favicon.ico" rel="shortcut icon">

		<!-- Google Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
			rel="stylesheet">

		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Libraries CSS Files -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate-css/animate.min.css" rel="stylesheet">

		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">

	</head>

	<body>
		<div id="preloader"></div>

		<?php include('header.php'); ?>
		<!-- #header -->

		<div class="limiter">
			<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
				<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
					<form class="login100-form validate-form flex-sb flex-w" method="post" action="signin.php">
						<span class="login100-form-title p-b-53">
							Sign In
						</span>

						<div class="p-t-31 p-b-9">
							<span class="txt1">
								Email
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Username is required">
							<input class="input100" type="email" name="mail">
							<span class="focus-input100"></span>
						</div>

						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Password
							</span>


						</div>
						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn">
								Sign In
							</button>
						</div>

						<div class="w-full text-center p-t-55">
							<span class="txt2">
								Not a member?
							</span>

							<a href="signup.php" class="txt2 bo1">
								Sign up now
							</a><br>
							<a href="#" class="txt2 bo1 m-l-5">
								Forgot?
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php include('footer.php'); ?>
		<!-- #footer -->

		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

		<!-- Required JavaScript Libraries -->
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/superfish/hoverIntent.js"></script>
		<script src="lib/superfish/superfish.min.js"></script>
		<script src="lib/morphext/morphext.min.js"></script>
		<script src="lib/wow/wow.min.js"></script>
		<script src="lib/stickyjs/sticky.js"></script>
		<script src="lib/easing/easing.js"></script>

		<!-- Template Specisifc Custom Javascript File -->
		<script src="js/custom.js"></script>

		<script src="contactform/contactform.js"></script>


	</body>

</html>
