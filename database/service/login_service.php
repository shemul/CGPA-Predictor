<?php 
session_start(); 
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>

<?php
	
	function validateLogin($email , $password) {
		     
	      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
	      $result = mysqli_query(get_db_connection(),$sql);
	      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      
	      
	      
	      $count = mysqli_num_rows($result);
	      
	      // If result matched $myusername and $mypassword, table row must be 1 row
				
	      if($count == 1) {
	         	
	         	if($row["deactive"] == 1) {
	         		echo "Deactivated Account !";
	         	} else {
		            $_SESSION['login_user'] = $row["full_name"];
		            $_SESSION['login_id'] = $row["id"];
		      		echo "OK";
	         	}

	      }else {
	         	echo "Email or password didn't match !";
	      }
		   	
	}
?>