<?php
	session_start();
	if(!isset($_SESSION["user_name"])){
		$_SESSION["message"] = "Please login to continue..!";
		header("Location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Home</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
			<link rel="stylesheet" href="css/style.css">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		</head>
		<body style="background-color:#fcf4e4;">	
			
			<div class="wrapper">
	
				<nav id="sidebar" >
						<section class="container">
							<section class="row justify-content-center ">
								<img src="images/male-avatar.png" alt="user" style="width:50%" class="rounded-circle"/>
							</section>
							<section class="row justify-content-center" >
								<table style="text-align:center">
								<tr><td><?php echo $_SESSION['name'];?></td></tr>
								<tr><td><?php echo $_SESSION['user_name'];?></td></tr>
								</table>
							</section>
							<hr class="navbar-divider my-3">
							<ul class="navbar-nav ">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
								  <a class="nav-link active" onclick="owner('DASHBOARD')" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true" style="padding:10px; margin:5px;">Dashboard</a>
								  <a class="nav-link" onclick="owner('ORDERS')" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-orders" aria-selected="false" style="padding:10px; margin:5px;">Orders</a>
								  <a class="nav-link" onclick="owner('ADD PRODUCTS')" id="v-pills-add-products-tab" data-toggle="pill" href="#v-pills-add-products" role="tab" aria-controls="v-pills-add-products" aria-selected="false" style="padding:10px; margin:5px;">Add Products</a>
								  <a class="nav-link" onclick="owner('VIEW PRODUCTS')" id="v-pills-view-products-tab" data-toggle="pill" href="#v-pills-view-products" role="tab" aria-controls="v-pills-view-products" aria-selected="false" style="padding:10px; margin:5px;">View products</a>
								  <hr class="navbar-divider my-3">
								  <a class="nav-link"   href="logout.php"   style="padding:10px; margin:5px;">Log Out</a>
								</div>
							</ul>	
					</section>
				</nav>
			
				<div id="content">
					
						<nav class="navbar bg-dark" style="box-shadow: 0px 0px 10px 0px #000;">
							
							<button type="button" id="sidebarCollapse"  class="btn btn-outline-light">
								<i class="fas fa-align-left"></i>
							</button>							
							<h1 class="navbar-brand justify-content-center text-white font-weight-bold" id="head_dash">DASHBOARD</h1>
							<h1 class="navbar-brand text-white justify-content-center ">LOGO</h1>
						</nav>
						<br>
						<?php 
						
							if(isset($_SESSION['message'])){
								echo "<div class='float-right'>
										<div class='alert alert-dark alert-dismissible fade show' role='alert' id='MyAlert'>
											<strong>".$_SESSION['message']."</strong>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
												<span aria-hidden='true'>&times;</span>
											</button>
										</div>
									</div>";
								$_SESSION['message']=NULL;
							}
						?>
						
					<section class="container bg-dark" style="box-shadow: 0px 0px 5px 0px #000; padding: 25px 50px 75px 100px;">
					<!--content Here-->
						<div class="tab-content" id="v-pills-tabContent">
						
						  <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">Dashboard</div>
						  <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab">Orders</div>
						  <div class="tab-pane fade" id="v-pills-add-products" role="tabpanel" aria-labelledby="v-pills-add-products-tab"><?php require "add_product.php"; ?></div>
						  <div class="tab-pane fade" id="v-pills-view-products" role="tabpanel" aria-labelledby="v-pills-view-products-tab">View Products</div>
						 
						</div>
					</section>	
				</div>	

			</div>
			
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="js/jquery.js" ></script>
			<script>
				function owner(name){
					document.getElementById('head_dash').innerHTML=name;
				}
				$(document).ready(function () {
							$('#sidebarCollapse').on('click', function () {
								$('#sidebar').toggleClass('active');
							});
						});

			</script>


		</body>
</html>