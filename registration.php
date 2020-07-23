<?php
	session_start();
	if(isset($_SESSION["user_name"]))
		header("Location: dashboard.php");
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
			<title>Registration</title>
		</head>
		
		<body class="bg">
			
			<section class="container-fluid" >
				<section class="row justify-content-center ">
					<section class="col-sm-8">
						
						<form  class="from-containers" action="db/reg_form.php"  method="POST" >
							<section class="from-containers mb-3 text-white" style="background-color: #1e3b3a; padding:5px;">
								<h1 class="text-center font-weight-bold ">Registration Form</h1>
								<p class="text-center font-weight-bold ">(shopkeeper)</p>
							</section>
							<div class="input-group mb-3 ">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
								</div>
								<input type="text" class="form-control" name="name" required />
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
								</div>
								<input type="email" class="form-control" name="email" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Password</span>
								</div>
								<input type="password" class="form-control" name="pass" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>							

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Confirm Password</span>
								</div>
								<input type="password" class="form-control" name="cpass" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Shop Name</span>
								</div>
								<input type="text" class="form-control" name="s_name" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Address</span>
								</div>
								<textarea type="text" class="form-control" name="address" rows="3" required ></textarea>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Phone No</span>
								</div>
								<input type="tel" class="form-control" name="ph_no" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">City</span>
								</div>
								<input type="text" class="form-control" name="city" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">State</span>
								</div>
								<select class="form-control" name="state">
									<option selected disabled>--select--</option>
									<option value="Tamil Nadu"> Tamil Nadu </option>
								</select>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">pincode</span>
								</div>
								<input type="text" class="form-control" name="pincode" required aria-label="name" aria-describedby="inputGroup-sizing-default">
							</div>
							
							<input class="btn btn-outline-dark btn-block" type="submit" value="Submit">
							<input class="btn btn-outline-dark btn-block" type="reset" value="Reset">
						</form>
					</section>
				</section>
			</section>
			
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			
		
		</body>
</html>