<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="./favicon/GITB Round Logo black.jpg">

	<title>GENIUS I.T GRADING SYSTEM</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/styles.css">
	<link rel="stylesheet" href="assets/css/ie10-viewport-bug-workaround.css">
	<link rel="stylesheet" href="assets/css/sticky-footer-navbar.css">
	<link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">

	<script src="assets/js/ie-emulation-modes-warning.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jq.js"></script>
		
		<style>
			body{
				display:flex;
				height: calc(100%);
				width: calc(100%);
				justify-content: center;
				align-items: center;
			}
			.login-form{
				display: block;
				position: fixed;
				border-radius: 20px;
				padding: 30px;
				width: 500px;
				background-color: white;
				left: 500px;
				top: 250px;
				
			}
			.erlert{
				display: block;
				border-radius: 5px;
				background-color: rgba(230, 103, 42, 0.37);
				padding: 5px;
			}
			
		</style>


</head>

	<body>
		<div class="container-fluid">
			<div class="login-form" id="login_modal" role="dialog">

				<center><h3 style="background:grey;color:black;border-radius:5px"><b>Please Login</b></h3></center>

				<form method="post" class="form-horizontal">
					<div class="form-group">
						<label for="user" class="control-label col-sm-2">User:</label>
						<div class="col-md-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<input class="form-control" id="user" type="text" name="user" placeholder="Enter User" autocomplete="on"></input>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="pwd" class="control-label col-sm-2">Password:</label>
						<div class="col-md-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-9" col-md-12>
							<!-- <button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal">Create New</button> -->

							<button class="btn btn-default" type="hidden">Login</button>
						</div>
					</div>
				</form>
				<?php
				include 'connect.php';
				?>
			</div>
		</div>

		<script src="assets/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop windows 8 bug -->
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
		
	</body>
</html>