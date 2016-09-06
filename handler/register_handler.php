<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/register_service.php';

	if(isset($_POST['email']) && isset($_POST["password"])){

		$full_name = $_POST["full_name"];
		$student_id = $_POST["student_id"];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(add_user($full_name , $student_id , $email , $password)) {
			echo "OK";
		} else {
			echo "Error occured while storing to database";
		}

	} else {
		var_dump($_POST);
		echo "All field must be filled";
	}

	
?>