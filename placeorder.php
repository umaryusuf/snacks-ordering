<?php

	$error = false;

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
	 	return $data;
	}

	if(isset($_POST['order'])){

		if(empty($_POST['fullname'])){
			$error = true;
			$fullnameErr = "Name field is empty";
		}else{
			$fullname = ucfirst(test_input($_POST['fullname']));
		}
		
		if(empty($_POST['phone'])){
			$error = true;
			$phoneErr = "phone number field is empty";
		}else{
			$phone = test_input($_POST['phone']);
		}
		
		if(empty($_POST['category'])){
			$error = true;
			$categoryErr = "category field is not selected";
		}else{
			$category = test_input($_POST['category']);
		}
		
		if(empty($_POST['amount'])){
			$error = true;
			$amountErr = "amount field is empty";
		}else{
			$amount = test_input($_POST['amount']);
		}
		
		if(empty($_POST['address'])){
			$error = true;
			$addressErr = "Adress field is empty";
		}else{
			$address = trim($_POST['address']);
		}

	
		if(!$error){

			require_once 'connection.php';

			$sql = "INSERT INTO `customers`(`customer_name`, `phone`, `category`, `amount`, `address`) VALUES('$fullname', '$phone', '$category', '$amount', '$address')";

			if(mysqli_query($dbc, $sql)){
				header("location: success.php");
			}

			mysqli_close($dbc);
		}		

	}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <title>Place Order</title>

        <link rel="shortcut icon" href="">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
				<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
      <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->

      <!-- Add your site or application content here -->
      <nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="index.php">Ordering System</a>
			    </div>
			    <div class="collapse navbar-collapse" id="myNavbar">
			      <ul class="nav navbar-nav">
			        <li><a href="index.php">Home</a></li>
			        <li><a href="about.php">About</a></li>
			        <li><a href="contact.php">Contact</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#" target="_blank"><i class="socials fa fa-twitter"></i></a></li>
			        <li><a href="#" target="_blank"><i class="socials fa fa-facebook"></i></a></li>
			        <li><a href="#" target="_blank"><i class="socials fa fa-instagram"></i></a></li>
			      </ul>
			    </div>
			  </div>
			</nav>

      <section class="container">
      	<div class="row">
      		<div class="col-md-4 col-md-offset-4">
      			<div class="panel panel-primary">
      				<div class="panel-heading">
      					<h3 class="white text-center">Place Order</h3>
      				</div>
      				<div class="panel-body" style="padding: 15px">
      					<form role="form" method="POST" action="#">
			              <div class="form-group">
			              	<label for="fullname">Full Name:</label>
		                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required autofocus>
		                  <span class="text-danger"><?php if(!empty($fullnameErr)){ echo $fullnameErr;} ?></span>
			              </div>
			              <div class="form-group">
			              	<label for="phone">Phone:</label>
		                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone no." required>
		                  <span class="text-danger"><?php if(!empty($phoneErr)){ echo $phoneErr;} ?></span>
			              </div>
			              <div class="row">
			              	<div class="col-xs-7">
			              		<div class="form-group">
					              	<label for="category">Category:</label>
					              	<select name="category" id="category" class="form-control">
					              		<option value="">-- choose category --</option>
					              		<option value="waina">Waina</option>
					              		<option value="bakers">Bakers</option>
					              		<option value="waina and meat">Waina and meat</option>
					              		<option value="waina and man shanu">Waina and man shanu</option>
					              		<option value="waina, meat and man shanu">Waina, meat and man shanu</option>
					              		<option value="pizza">Pizza</option>
					              		<option value="fish pie"> Fish pie</option>
					              		<option value="meat pie">Meat pie</option>
					              		<option value="fish roll">Meat roll</option>
					              		<option value="savoury snack">Savoury Snack</option>
					              	</select>
					              	<span class="text-danger"><?php if(!empty($categoryErr)){ echo $categoryErr;} ?></span>
					              </div>
			              	</div>
			              	<div class="col-xs-5">
			              		<div class="form-group">
					              	<label for="amount">Amount:</label>
					              	<input type="number" class="form-control" min="100" name="amount" id="amount" placeholder="amount" required>
					              	<span class="text-danger"><?php if(!empty($amountErr)){ echo $amountErr;} ?></span>
					              </div>
			              	</div>
			              </div>
			              
			              <label for="address">Address</label>
			              <textarea name="address" class="form-control" id="address" cols="30" rows="3" placeholder="Your address"></textarea>
			              <span class="text-danger"><?php if(!empty($addressErr)){ echo $addressErr;} ?></span>
			              <br>
								  <button type="submit" class="btn btn-primary btn-block" name="order">Place Order</button>
								</form>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>

			<?php include_once 'includes/footer.php'; ?>

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/main.js"></script>
    </body>
</html>
