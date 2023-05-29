<?php
session_start();
include('config.php');
include('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Fin-Tech|P2P</title>
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
		<link rel="stylesheet" type="text/css" href="css/lend.css">
		<style>
			.flex-container {
				display: flex;
				flex-wrap: wrap;
			}

			.flex-container>div {

				margin: 10px;
				padding: 20px;
			}
		</style>

	</head>

	<body style="background-image: url(img/hero-bg.jpg);">


		<?php include('header.php'); ?>


		<div id="preloader"></div>
		<div class="flex-container">
			<?php
			$useruid = $_SESSION['user_data']['uid'];
			$qry = mysqli_query($con, "SELECT * FROM borrow WHERE useruid!='$useruid' and amount!=collect ");
			while ($rows = mysqli_fetch_array($qry)) {
				$useruid = $rows['useruid'];
				$sql = mysqli_query($con, "SELECT * FROM user WHERE uid='$useruid' ") or die(mysqli_error($con));
				$sql1 = mysqli_fetch_array($sql);
				if ($rows['logo'] == "")
					$picture = "img/user.png";
				else
					$picture = $rows['logo'];
				?>
				<div class="container">
					<div class="row">
						<div
							class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


							<div class="panel panel-info">
								<div class="panel-heading">
									<h3 class="panel-title">
										<?php echo $sql1['name']; ?>
									</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $picture; ?>"
												class="img-circle img-responsive"> </div>

										<div class=" col-md-9 col-lg-9 ">
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>
															<?php echo $rows['title']; ?>
														</td>

														<td>Category:
															<?php echo $rows['category']; ?>
														</td>
													</tr>
													<tr>
														<td>Description:</td>
														<td>
															<?php echo $rows['descrip']; ?>
														</td>
													</tr>
													<tr>
														<td>Amount Collected</td>
														<td>
															<?php echo ($rows['amount'] - $rows['collect']); ?>
														</td>
													</tr>
													<tr>
														<td>Amount Needed</td>
														<td>
															<?php echo $rows['amount']; ?>
														</td>
													</tr>

												</tbody>
											</table>
											<div class="wrap-input100 validate-input">
												<form method="post" action="investp2p.php">
													<select class="input100" name="amount">
														<option>Select Amount to pay</option>
														<option value="<?php echo (1 * $rows['part']); ?>"><?php echo (1 * $rows['part']); ?></option>
														<option value="<?php echo (2 * $rows['part']); ?>"><?php echo (2 * $rows['part']); ?></option>
														<option value="<?php echo (3 * $rows['part']); ?>"><?php echo (3 * $rows['part']); ?></option>
														<option value="<?php echo (4 * $rows['part']); ?>"><?php echo (4 * $rows['part']); ?></option>
														<option value="<?php echo (5 * $rows['part']); ?>"><?php echo (5 * $rows['part']); ?></option>
													</select>
													<input type="hidden" name="borrowuid" value="<?php echo $rows['borrowuid']; ?>">
													<span class="focus-input100"></span>
											</div>
											<a href="#" class="btn btn-primary">Invest</a>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>



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
