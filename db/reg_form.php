<?php
	require "../db_conn.php";
	
	$name = "";
	$email = "";
	$pass =  "";
	$shop_name = "";
	$address = "";
	$phone = "";
	$city = "";
	$state = "";
	$pincode = "";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass =  $_POST['pass'];
	$pass = md5($pass);
	$shop_name = $_POST['s_name'];
	$address = $_POST['address'];
	$phone = $_POST['ph_no'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	
	$ob_id="s";
	
	$query = "INSERT INTO shop_owner_details (shop_name,ph_no,address,city,state,pincode,mail_id) VALUES ('$shop_name','$phone','$address','$city','$state','$pincode','$email')";
	$ex = mysqli_query($conn,$query); 
	if($ex == TRUE ){
		$exe = "SELECT shop_id FROM shop_owner_details WHERE mail_id='$email'";
		$result =	mysqli_query($conn,$exe);
		
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$ref_id = $row["shop_id"];
			$query1 = "INSERT INTO login_table (name,email,password,ob_id,ref_id) VALUES ('$name','$email','$pass','$ob_id','$ref_id')";
			if(mysqli_query($conn,$query1)==TRUE){
				session_start();
				$_SESSION['user_name'] = $email;
				$_SESSION['name'] = $name;
				$_SESSION['message'] = "Welcome (Registered successfull).!";
				header("Location:../dashboard.php");
			}else
			echo $conn->error;
		}
	}
	
	else
		echo $conn->error;


	$conn->close();
?>