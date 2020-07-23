<?php
	session_start();
	if(isset($_SESSION['user_name'])){
		header("Location: dashboard.php");
	}
?>
<!doctype html>
<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<title>Login</title>
		</head>
		
		<body>
			
			<section class="bg">
				
				<section class="container h-1000 d-flex justify-content-center">
				
					<section>
						<?php 
							
							if(isset($_SESSION['message'])){
								echo "<div class='float-none'>
										<div class='alert alert-warning alert-dismissible fade show' role='alert' id='MyAlert'>
											<strong>".$_SESSION['message']."</strong>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
											<span aria-hidden='true'>&times;</span>
											</button>
										</div>
									</div>";
									$_SESSION['message']=NULL;
							}
						?>
					</section>
						<form  class="from-container" action="db/login_db.php"  method="POST" >
							
							<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" name="pass" id="exampleInputPassword1">
							</div>
							
							<div class="alert alert-light" role="alert" style="font-size:13px">
								If you don't have account <a href="registration.php" class="alert-link">Click here.!</a>
							</div>
							
							<input class="btn btn-outline-dark btn-block" type="submit" value="Submit">
							

						</form>
					
				</section>
			</section>
			
			 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			<script src="js/jquery.js" ></script>
		
		</body>
</html>