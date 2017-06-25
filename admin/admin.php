<?php  
	session_start();

	if(!$_SESSION['username']){
		echo "<script>alert('You are not authorized to view this page until you logged in')</script>";
		header("location:index.php");
	}
	require_once '../connection.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <title>Welcome to Admin Panel</title>

        <link rel="shortcut icon" href="">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
				<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/admin.css">

        <script src="../assets/js/jquery.min.js"></script>
      	<script src="../assets/js/bootstrap.min.js"></script>
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
			        <li class="active"><a href="admin.php">Home</a></li>
			        <li><a href="add_admin.php">Add Admin</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>

      <section class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>List of customers order</h2>
						<table class="table table-bordered">
							<thead>
								<tr class="active">
									<th>Customer Name</th>
									<th>Phone</th>
									<th>Category</th>
									<th>Amount</th>
									<th>Adress</th>
									<th width="5%">Del</th>
								</tr>
							</thead>
							<tbody>
								<?php

								require_once '../connection.php';

								$sql = "SELECT * FROM customers";
								$run_sql = @mysqli_query($dbc, $sql);

								while ($data = mysqli_fetch_array($run_sql)) {
									$id = $data['id'];
									$customer_name = $data['customer_name'];
									$phone = $data['phone'];
									$category = $data['category'];
									$amount = $data['amount'];
									$address = $data['address'];

								?>
								<tr>
									<td><?php echo ucwords($customer_name); ?></td>
									<td><?php echo $phone; ?></td>
									<td><?php echo $category; ?></td>
									<td>N<?php echo $amount; ?></td>
									<td><?php echo ucfirst($address); ?></td>
									<td><a href="delete.php?del=<?php echo $id; ?>" id="deleteOrder" title="Delete Order" class="text-danger"><span class="fa fa-trash"> </span> del</a></td>
								</tr>

								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</section>

      <script>
      	$(function(){
      		$('#deleteOrder').on('click', function(e){
      			e.preventDefault();
      			deleteOrder();
      		});

      		function deleteOrder() {
						if(confirm("Are you sure want to delete these rows?")) {
							window.open("delete.php?del=<?php echo $id;?>", "_self");
						}
					}
      	});
      </script>
    </body>
</html>
