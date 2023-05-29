<style type="text/css">
	header {
		padding: 10px;
	}
</style>
<?php
if (isset($_SESSION['user_data']) == "") {
	?>
	<header style="background: black;">
		<div class="container">

			<div id="logo" class="pull-left">
				<a href="index.php"><img src="img/visudha.png" alt="Fin-Tech"
						style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
				<!-- Uncomment below if you prefer to use a text image -->
				<!--<h1><a href="index.php">Header 1</a></h1>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">


					<li class="menu-has-children"><a> P2P Lending</a>
						<ul>
							<li><a href="#" onclick="myfunction()">Lend</a></li>
							<li><a href="#" onclick="myfunction()">Borrow</a></li>
						</ul>
					</li>

					<li class="menu-has-children"><a>Crowd Funding</a>
						<ul>
							<li><a href="#" onclick="myfunction()">Lend</a></li>
							<li><a href="#" onclick="myfunction()">Borrow</a></li>
						</ul>
					</li>

					<li class="menu-has-children"><a>Financial Advisory</a>
						<ul>
							<li><a href="#"></a>Trending</li>
							<li><a href="#">P2P Landscape</a></li>
							<li><a href="#">Fair Advice</a></li>
							<li><a href="#">Media Centre</a></li>
						</ul>
					</li>

					<li class="menu-has-children"><a>Wealth Management</a>
						<ul>
							<li><a href="#">Portfolio What-If-analysis</a></li>
							<li><a href="mortage.php">Mortage Calculator</a></li>
						</ul>
					</li>

					<li class="menu-has-children"><a>Asset Management</a>
						<ul>
							<li><a href="#">Loan Performance</a></li>
							<li><a href="#">Loan Statistics</a></li>
							<li><a href="#">Research Analysis</a></li>
						</ul>
					</li>

					<li class="menu-has-children"><a>Login</a>
						<ul>
							<li><a href="login.php">Existing User</a></li>
							<li><a href="signup.php">New User</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<!-- #nav-menu-container -->
		</div>
	</header>
	<?php
} else if ($_SESSION['user_type'] == "user") {
	?>
		<header style="background: black;">
			<div class="container">

				<div id="logo" class="pull-left">
					<a href="index.php"><img src="img/visudha.png" alt="Fin-Tech"
							style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
					<!-- Uncomment below if you prefer to use a text image -->
					<!--<h1><a href="index.php">Header 1</a></h1>-->
				</div>

				<nav id="nav-menu-container">
					<ul class="nav-menu">


						<li class="menu-has-children"><a>P2P Lending</a>
							<ul>
								<li><a href="P2P.php">Lend</a></li>
								<li><a href="loanp2p.php">Borrow</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Crowd Funding</a>
							<ul>
								<li><a href="Crowdfunding.php">Lend</a></li>
								<li><a href="loancrowd.php">Borrow</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Financial Advisory</a>
							<ul>
								<li><a href="#"></a>Trending</li>
								<li><a href="#">P2P Landscape</a></li>
								<li><a href="#">Fair Advice</a></li>
								<li><a href="#">Media Centre</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Wealth Management</a>
							<ul>
								<li><a href="#">Portfolio What-If-analysis</a></li>
								<li><a href="mortage.php">Mortage Calculator</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Asset Management</a>
							<ul>
								<li><a href="#">Loan Performance</a></li>
								<li><a href="#">Loan Statistics</a></li>
								<li><a href="#">Research Analysis</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>
							<?php echo $_SESSION['user_data']['name']; ?>
							</a>
							<ul>
								<li><a href="Dashboard.php">Dashboard</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<!-- #nav-menu-container -->
			</div>
		</header>
	<?php
} else {
	?>
		<header style="background: black;">
			<div class="container">

				<div id="logo" class="pull-left">
					<a href="index.php"><img src="img/visudha.png" alt="Fin-Tech"
							style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a>
					<!-- Uncomment below if you prefer to use a text image -->
					<!--<h1><a href="index.php">Header 1</a></h1>-->
				</div>

				<nav id="nav-menu-container">
					<ul class="nav-menu">


						<li class="menu-has-children"><a> P2P Lending</a>
							<ul>
								<li><a href="#" onclick="myfunction()">Lend</a></li>
								<li><a href="#" onclick="myfunction()">Borrow</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Crowd Funding</a>
							<ul>
								<li><a href="#" onclick="myfunction()">Lend</a></li>
								<li><a href="#" onclick="myfunction()">Borrow</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Financial Advisory</a>
							<ul>
								<li><a href="#"></a>Trending</li>
								<li><a href="#">P2P Landscape</a></li>
								<li><a href="#">Fair Advice</a></li>
								<li><a href="#">Media Centre</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Wealth Management</a>
							<ul>
								<li><a href="#">Portfolio What-If-analysis</a></li>
								<li><a href="mortage.php">Mortage Calculator</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Asset Management</a>
							<ul>
								<li><a href="#">Loan Performance</a></li>
								<li><a href="#">Loan Statistics</a></li>
								<li><a href="#">Research Analysis</a></li>
							</ul>
						</li>

						<li class="menu-has-children"><a>Login</a>
							<ul>
								<li><a href="login.php">Existing User</a></li>
								<li><a href="signin.php">New User</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<!-- #nav-menu-container -->
			</div>
		</header>
	<?php
}
?>
<script>
	function myfunction() {
		alert("LogIn First");
	}
</script>
