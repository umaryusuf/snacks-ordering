<?php
	session_start();

	$message = "";

	if(!$_SESSION['username']){
		echo "<script>alert('You are not authorized to view this page until you logged in')</script>";
		header("location:index.php");
	}  
	
	require_once '../connection.php';

	if(isset($_POST['add_admin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username = test_input($username);
		$password = md5($password);

		$query = "INSERT INTO `admin`(`username`, `password`) VALUES('$username','$password')";

		if(mysqli_query($dbc, $query)){
			$message = "Admin added sucessfully";
		}else{
			$message = "Error adding new admin";
		}


	}

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);

	 	return $data;
	}

?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">

      <title>Add Admin</title>

      <link rel="shortcut icon" href="">
      <!-- Place favicon.ico in the root directory -->

      <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/admin.css">
    </head>
    <body>
      <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="admin.php">Admin Panel</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li><a href="admin.php">Home</a></li>
			        <li class="active"><a href="add_admin.php">Add Admin</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>

      <section class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<?php

							if($message != ''){
								echo "
									<div class='alert alert-info'>
										<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
										<strong>Info: </strong>".$message."
									</div>";
							}

						?>
						<div class="panel panel-primary" style="margin: 10px 0">
							<div class="panel-heading">
								<h4 class="text-center" style="color: #fff">Add New Admin</h4>
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="add_admin.php">
								  <label for="username">Username:</label>
				              <div class="form-group input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				                  <input type="text" class="form-control input-lg" id="username" name="username" placeholder="username" required autofocus>
				              </div>
				              <label for="password">Password:</label>
				              <div class="form-group input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				                  <input type="password" class="form-control input-lg" id="password" name="password" placeholder="password" required>
				              </div>
								  <button type="submit" class="btn btn-primary btn-lg btn-block" name="add_admin">Add Admin</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>


      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
    </body>
</html>
