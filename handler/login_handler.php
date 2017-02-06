<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/login_service.php';

	if(isset($_POST['email']) && isset($_POST["password"])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			validateLogin($email,$password);
		}
		
	}

	
	
?>