<?php
	
	session_start();

	unset($_SESSION["user_name"]);

	unset($_SESSION["name"]);

	$BackToMyPage = $_SERVER['HTTP_REFERER'];
	if(isset($BackToMyPage)) {
		header('Location: '.$BackToMyPage);
	} else {
		header('Location: index.php'); // default page
	}

?>