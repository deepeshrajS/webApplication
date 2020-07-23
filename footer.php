<!DOCTYPE html>
<html>
		<head>
			<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
			<link href="css/materialize.css" rel="stylesheet">
			<link href="css/materialize.min.css" rel="stylesheet">
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		</head>
		<body>
			<h1>Welcome</h1>
<?php
			
				if($_SERVER['REQUEST_METHOD']== "POST"){
					require "db_conn.php";
					
					function test_input($data){
					 $data = trim($data);
					 $data = stripslashes($data);
					 $data = htmlspecialchars($data);
					 return $data;
					}

					$name = "";
					$email = "";
					$pass =  "";
					$cpass = "";
					$shop_name = "";
					$address = "";
					$phone = "";
					$city = "";
					$pincode = "";

					$name = test_input($_POST["name"]);
					$email = test_input($_POST['email']);
					$pass =  test_input($_POST['pass']);
					$cpass = test_input($_POST['cpass']);
					$shop_name = test_input($_POST['s_name']);
					$address = test_input($_POST['address']);
					$phone = test_input($_POST['ph_no']);
					$city = test_input($_POST['city']);
					$pincode = test_input($_POST['pincode']);	
					
					if($name == "" || $email=="" || $pass=="" || $cpass=="" || $shop_name=="" || $address=="" || $phone=="" || $city=="" || $pincode==""){
						echo "<script>alert('Enter the valid input');</script>";
					}
					elseif(!($pass == $cpass)){
						echo "<script>alert('Invalid passsword');</script>";
					}
				}
			
			?>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
			<script src="js/jquery.js" type="text/javascript"></script>
			<script src="js/materialize.js"></script>
			<script src="js/materialize.min.js"></script>
			<script src="js/script.js"></script>
			
		</body>
</html>