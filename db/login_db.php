<?php
	include "../db_conn.php";
	
	$email = "";
	$pass = "";
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass = md5($pass);
	
	$query = "SELECT name,email,password,ob_id FROM login_table WHERE email='$email' AND password='$pass'";
	$result = mysqli_query($conn,$query);
	$row  = mysqli_fetch_assoc($result);
 	if(mysqli_num_rows($result)>0){
		session_start();
		$_SESSION['user_name'] = $row['email'];
		$_SESSION['name'] = $row['name'];
		if($row['ob_id']=='s'){
			header("Location:../dashboard.php");
			$_SESSION['message'] = 'Welcome Back.!';
		}else{
			$userpage=0;
		}
	}else{
		session_start();
		$_SESSION['message'] = "Invalid login.!";
		header("Location:../login.php");
	}
	$conn->close();
?>