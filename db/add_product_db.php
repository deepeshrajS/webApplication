<?php
	include "db_conn.php";
	
	session_start();
	$email = $_SESSION['user_name'];
	$query = "SELECT ref_id FROM login_table WHERE email = '$email'";
	$result = mysqli_query($conn,$query);
	$val = mysqli_fetch_array($result);
	$shop_id = $val['ref_id'];
	
	$pname = $_POST['product_name'];
	$p_category = $_POST['product_cat'];
	$p_price  = $_POST['product_price'];
	$quality_avai = $_POST['quantity_available'];
	$product_name = rand(1000,100000)."_".$_FILES['product_picture']['name'];
	
	$temp_name = $_FILES['product_picture']['tmp_name'];
	$upload_dir = "product_images";
	move_uploaded_file($temp_name,$upload_dir."/".$product_name);
	
	$query1 = "INSERT INTO product_table(product_name,product_cat,product_price,quantity_available,shop_id,product_picture) VALUES ('$pname','$p_category','$p_price','$quality_avai','$shop_id','$product_name' )";
	if(mysqli_query($conn,$query1)==TRUE){
		$_SESSION['message'] = 'Inserted successfully';
		header('Location:../dashboard.php');
	}
	else{
		$_SESSION['message'] = 'Error While Uploading';
		header('Location:../dashboard.php');
	}
		
	
?>