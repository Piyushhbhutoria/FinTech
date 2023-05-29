<?php
session_start();
include('config.php');
include('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Fin-Tech|Dashboard</title>
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
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/icomoon.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/transaction-history.css">
		<script src="js/modernizr-2.6.2.min.js"></script>

	</head>

	<body>
		<div id="preloader"></div>

		<?php include('header.php'); ?>

		<div id="page">

			<div id="main-content">
				<div id="myHeader">
					<button
						style="color: white;border-radius: 15px;font-size: 52px; background: black;opacity: 0.6;position: relative;left: 30%;font-weight: bolder;margin-bottom: 50px;">Your
						Transaction History</button>
				</div>
				<div id="main-options">
					<div id="modal">
						<div class="question">
							<div class="q">
								<img src="img/right-arrow.png">
								<p>Wallet Details</p>
							</div>
							<div class="a">
								<?php
								$useruid = $_SESSION['user_data']['uid'];
								$row = mysqli_query($con, "SELECT * FROM wallet WHERE useruid='$useruid' ");
								$row1 = mysqli_fetch_array($row);
								$balance = $row1['balance'];
								?>
								<p id="wallet">Your wallet amount is <span>
										<?php echo $balance; ?>
									</span> </p>
								<div class="row">
									<div id="jump-here" class="col-sm-6 form-box dual_register-2">
										<div class="form-top">
											<div class="form-top-left">
												<h2 style="color: #1a1a1a; text-align: center;">Withdraw Amount</h2>
												<!--<p>Fill in the details to Register: </p>-->
											</div>
											<div class="form-top-right">
												<i class="fa fa-key"></i>
											</div>
										</div>
										<div class="form-bottom">
											<form role="form" action="subwallet.php" method="post" class="login-form">
												<div class="form-group">
													<label class="sr-only" for="form-number">Number</label>
													<input type="number" name="amount" placeholder="Amount You Want To Withdraw..."
														class="form-number form-control" id="form-number">
												</div>

												<button type="submit" class="btn">Withdraw</button>
											</form>
										</div>
									</div>
									<div class="col-sm-6 form-box dual_register-1">
										<div class="form-top">
											<div class="form-top-left">
												<h2 style="color: #1a1a1a;text-align: center;">Add To Wallet</h2>
												<!--<p>Enter your username and password to log on:</p>-->
											</div>
											<div class="form-top-right">
												<i class="fa fa-key"></i>
											</div>
										</div>
										<div class="form-bottom">
											<form role="form" action="addwallet.php" method="post" class="login-form">
												<div class="form-group">
													<label class="sr-only" for="form-number">number</label>
													<input type="number" name="amount" placeholder="Amount You Want To Add..." class="
																																form-number form-control" id="form-number">
												</div>

												<button type="submit" class="btn">Add Amount</button>

											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="question">
								<div class="q">
									<img src="img/right-arrow.png">
									<p>Your Wallet Transactions</p>
								</div>
								<div class="a">
									<table class="table table-hover" id="dev-table">
										<thead>
											<tr>
												<th>Transaction Number</th>
												<th>Amount</th>
												<th>Type</th>
												<th>Balance</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$trans = mysqli_query($con, "SELECT * FROM transaction WHERE useruid='$useruid' ");
											while ($rows = mysqli_fetch_array($trans)) {
												?>
												<tr>
													<td>
														<?php echo $rows['id']; ?>
													</td>
													<td>
														<?php echo $rows['amount']; ?>
													</td>
													<td>
														<?php echo $rows['type']; ?>
													</td>
													<td>
														<?php echo $rows['balance']; ?>
													</td>
												</tr>
												<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="question">
								<div class="q">
									<img src="img/right-arrow.png">
									<p>Your Investments</p>
								</div>
								<div class="a">
									<table class="table table-hover" id="dev-table">
										<thead>
											<tr>
												<th>Serial Number</th>
												<th>Amount</th>
												<th>Project Name</th>
												<th>Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$invest = mysqli_query($con, "SELECT * FROM invest WHERE useruid='$useruid' ");
											while ($row = mysqli_fetch_array($invest)) {
												?>
												<tr>
													<td>
														<?php echo $row['id']; ?>
													</td>
													<td>
														<?php echo $row['amount']; ?>
													</td>
													<?php
													$borrowuid = $row['borrowuid'];
													$invest1 = mysqli_query($con, "SELECT * FROM borrow WHERE borrowuid='$borrowuid' ");
													$invest2 = mysqli_fetch_array($invest1);

													?>
													<td>
														<?php echo $invest2['title']; ?>
													</td>
													<td>
														<?php echo $row['date']; ?>
													</td>
												</tr>
												<?php
											}
											?>
											<?php
											$invest = mysqli_query($con, "SELECT * FROM investcrowd WHERE useruid='$useruid' ");
											while ($row = mysqli_fetch_array($invest)) {
												?>
												<tr>
													<td>
														<?php echo $row['id']; ?>
													</td>
													<td>
														<?php echo $row['amount']; ?>
													</td>
													<?php
													$borrowuid = $row['borrowuid'];
													$invest1 = mysqli_query($con, "SELECT * FROM borrowcrowd WHERE borrowuid='$borrowuid' ");
													$invest2 = mysqli_fetch_array($invest1);

													?>
													<td>
														<?php echo $invest2['title']; ?>
													</td>
													<td>
														<?php echo $row['date']; ?>
													</td>
												</tr>
												<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>


							<div class="question">
								<div class="q">
									<img src="img/right-arrow.png">
									<p>Your Loans</p>
								</div>
								<div class="a bottom">
									<?php
									$useruid = $_SESSION['user_data']['uid'];
									$qry = mysqli_query($con, "SELECT * FROM borrow WHERE useruid='$useruid' ");
									while ($rows = mysqli_fetch_array($qry)) {
										if ($rows['logo'] == "")
											$picture = "img/user.png";
										else
											$picture = $rows['logo'];

										?>
										<div class="options">
											<img src="<img/>" class="img-thumbnail lender-pic" alt="User Photo">
											<div class="project-details">
												<h3>
													<?php echo $rows['title']; ?>
													<p>Project category:
														<?php echo $rows['category']; ?>
													</p>
													<h4>Project Description</h4>
													<p>
														<?php echo $rows['descrip']; ?>
													</p>
													<h4>Amount Needed: <span class="amount">Rs.
															<?php echo ($rows['amount'] - $rows['collect']); ?>
														</span></h4>
													<h4>Days Left: <span class="days">
															<?php echo $rows['timee']; ?>
														</span></h4>
											</div>
										</div>
										<?php
									}
									?>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>

			<?php include('footer.php'); ?>
			<!-- #footer -->
		</div>
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
