<?php  
$page_title = "home";
$title = "Online Snacks Ordering";
require_once 'connection.php'; ?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <title>Welcome to Waina Ordering System</title>

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

      <!-- site navigation -->
      <?php require_once 'includes/nav.php'; ?>

			<!-- main section -->
			<section class="container">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="assets/img/first.jpg" alt="waina photo">
				      <div class="carousel-caption">
				        <h1 class="text-center white"><?php echo $title; ?></h1>
								<p>
									The best online snacks ordering service retaurant that delivers the best snacks at affordable price. <br> <a href="placeorder.php" class="btn btn-primary btn-lg order">PLace Order</a>
								</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="assets/img/snack1.jpg" alt="waina photo">
				      <div class="carousel-caption">
				        <h1 class="text-center white"><?php echo $title; ?></h1>
								<p>
									The best online snacks ordering service retaurant that delivers the best snacks at affordable price.<br> <a href="placeorder.php" class="btn btn-primary btn-lg order">PLace Order</a>
								</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="assets/img/snack3.jpg" alt="waina photo">
				      <div class="carousel-caption">
				        <h1 class="text-center white"><?php echo $title; ?></h1>
								<p>
									The best online snacks ordering service retaurant that delivers the best snacks at affordable price. <br> <a href="placeorder.php" class="btn btn-primary btn-lg order">PLace Order</a>
								</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="assets/img/fourth.jpg" alt="waina photo">
				      <div class="carousel-caption">
				        <h1 class="text-center white"><?php echo $title; ?></h1>
								<p>
									The best online snacks ordering service retaurant that delivers the best snacks at affordable price. <br> <a href="placeorder.php" class="btn btn-primary btn-lg order">PLace Order</a>
								</p>
				      </div>
				    </div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</section>
			<br>
			<section class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Basic</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/basic.jpg" alt="" class="food-img img-responsive">
								<div class="content">
									<h4>Waina</h4>
									<p>This delicoius waina will stand out any event</p>
									<!-- <p><span class="naira">N</span>500</p> -->
									<p class="details1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details1">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn" >Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Premium</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/Premium.jpg" alt="waina" class="food-img img-responsive">
								<div class="content">
									<h4>Waina and Meat</h4>
									<p>This delicoius waina will stand out any event</p>
									<!-- <p><span class="naira">N</span>700</p> -->
									<p class="details2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details2">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn">Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Super</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/gold.jpg" alt="waina" class="food-img img-responsive">
								<div class="content">
									<h4>Waina, meat and man shanu</h4>
									<p>This delicoius waina will stand out any event</p>
									<!-- <p><span class="naira">N</span>1000</p> -->
									<p class="details3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details3">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn">Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Basic</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/snack1.jpg" alt="" class="food-img img-responsive">
								<div class="content">
									<h4>Meat/Fish Pie</h4>
									<p>This delicoius pie will stand out any event</p>
									<!-- <p><span class="naira">N</span>500</p> -->
									<p class="details1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details1">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn" >Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Premium</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/snack2.jpg" alt="waina" class="food-img img-responsive">
								<div class="content">
									<h4>Bakers</h4>
									<p>This delicoius bakers will stand out any event</p>
									<!-- <p><span class="naira">N</span>700</p> -->
									<p class="details2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details2">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn">Order</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading text-center">
								<h3 class="white">Super</h3>
							</div>
							<div class="panel-body">
								<img src="assets/img/snack3.jpg" alt="waina" class="food-img img-responsive">
								<div class="content">
									<h4>Savoury Snack</h4>
									<p>This delicoius snack will stand out any event</p>
									<!-- <p><span class="naira">N</span>1000</p> -->
									<p class="details3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
									  <button class="details-btn btn btn-primary btn-block" data-details-id="details3">More details</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-primary btn-block order-btn">Order</button>
									</div>
								</div>
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
