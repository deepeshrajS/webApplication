<?php
	if(!isset($_SESSION["user_name"])){
		$_SESSION["message"] = "Please login to continue..!";
		header("Location: Login.php");
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
			<title>Registration</title>
		</head>
		
		<body>
			
			<section class="container-fluid " >
				<section class="row justify-content-center ">
					<section class="col-sm-8">
						
						<form action="db/add_product_db.php"  method="POST" >
							
							<div class="input-group mb-3 ">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Product Name</span>
								</div>
								<input type="text" class="form-control" name="product_name" required aria-label="product_name" aria-describedby="inputGroup-sizing-default" />
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Product Category</label>
								</div>
								<select class="custom-select" id="inputGroupSelect01" name="product_cat">
									<option selected disabled>Choose...</option>
									<?php
									include "db_conn.php";
									$sql = "SELECT * FROM category_table";
									$ex = mysqli_query($conn,$sql);
									$count = mysqli_num_rows($ex);
									while($count){
										$result = mysqli_fetch_assoc($ex);
										echo "<option disabled>".$result['category_name']."</option>";
										$sub = "SELECT * FROM sub_category WHERE  category_id =".$result['id'];
										$ex1 = mysqli_query($conn,$sub);
										$count1 = mysqli_num_rows($ex1);
										while($count1){
											$sub_ = mysqli_fetch_assoc($ex1);
											echo $sub_['sub_category'];
											echo "<option value='".$sub_['id']."'>".$sub_['sub_category']."</option>";
											$count1--;
										}
										$count--;
										echo "<br>";
									}
									$conn->close();
									?>
								</select>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Product Price</span>
								</div>
								<input type="number" class="form-control" name="product_price" required aria-label="product_price" aria-describedby="inputGroup-sizing-default">
							</div>							

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Quantity Available</span>
								</div>
								<input type="number" class="form-control" name="quantity_available" required aria-label="quantity_available" aria-describedby="inputGroup-sizing-default">
							</div>							
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Product Pricture</span>
								</div>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="product_picture" id="inputGroupFile01" accept=".jpeg,.jpg,.png">
									
								</div>
							</div>
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroup-sizing-default">Description</span>
								</div>
								<textarea type="text" class="form-control" name="description" rows="3" required ></textarea>
							</div>
							
							<input class="btn btn-outline-light btn-block" type="submit" value="Submit">
							<input class="btn btn-outline-light btn-block" type="reset" value="Reset">
						</form>
					</section>
				</section>
			</section>
			
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			
		
		</body>
</html>