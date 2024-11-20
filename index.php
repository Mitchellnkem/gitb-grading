<?php
require_once 'auth.php'
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- <link rel="icon" href="./favicon/GITB Round Logo black.jpg"> -->
		<link rel="icon" href="./favicon/GITB Round Logo black.jpg">
		
		
		<title>GENIUS I.T BRAINERY</title>

		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/ie10-viewport-bug-workaround.css">
		<link rel="stylesheet" href="assets/css/sticky-footer-navbar.css">
		<script src="assets/js/ie-emulation-mode-warning.js"></script>
		

	</head>

	<body>
		<!-- Fixed navbar -->
		<nav class="navbar navbar_default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class"sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h2>GENIUS I.T BRAINERY RECORD MANAGEMENT SYSTEM</h2>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<div class="col-md-2">
						<ul class="nav navbar-nav navbar-right">
			
							<li class="active"><a href="#">Home</a></li>
							<li class="dropdown">
								<a href="#" class="nav navbar dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master List<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="students.php">Students</a></li>
									<li><a href="#">Courses</a></li>
								</ul>
							</li>
								<li><a href="logout.php">Logout</a></li>
						</ul>
				</div>
				</div>   <!--nav-collapse.-->
			</div>
		</nav>
		

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Sticky footer with fixed navbar</h1>
			</div>
			<p class="lead">Welcome to the GENIUS I.T BRAINERY Record Management System. This system helps manage student records and course information efficiently.</p>
			<p>Please use the navigation menu above to access different sections of the system.</p>
			<p>Back to <a href="../sticky-footer">the default sticky footer</a>excluding the navbar</p>
		</div>

		<footer class="footer">
			<div class="container">
				<p class="text-muted">Place sticky footer content here.</p>
			</div>
		</footer>



		<!-- Bootsrap core {JAVASCRIPT} -->
		<!-- ============================================= -->
		<!-- placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- IE10 viewport hack for Surface / desktop bug -->
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>


	</body>
</html>