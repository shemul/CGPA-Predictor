<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php
	
	


	function getFullName() {
		
		$id = $_SESSION['login_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query(get_db_connection(),$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row["full_name"];
	}
	function getStudentId() {
		$id = $_SESSION['login_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query(get_db_connection(),$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row["student_id"];
	}
	function getEmail() {
		$id = $_SESSION['login_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query(get_db_connection(),$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row["email"];
	}
	function getPassword() {
		$id = $_SESSION['login_id'];
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query(get_db_connection(),$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		return $row["password"];
	}
	function getUserId() {
		$id = $_SESSION['login_id'];
		
		return $id;
	}

	function getProfilePic() {
		$id =getStudentId();
		
		return "/uploads/" . $id . ".jpg";
	}

	if(isset($_POST["full_name"])) {

		
		$id = $_POST["id"];
		
		$full_name = $_POST["full_name"];
		$student_id = $_POST["student_id"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$sql = "UPDATE users SET full_name='$full_name' , student_id = '$student_id' , email = '$email' , password = '$password' WHERE id= $id";
		
		if($result = mysqli_query(get_db_connection(),$sql)) {
			echo "success";
		} else {
			echo "error";
		}

			
	}


	if(isset($_POST["deactive"])) {

		
		$id = $_POST["id"];
		
		$sql = "UPDATE users SET deactive=1 WHERE id= $id";
		
		if($result = mysqli_query(get_db_connection(),$sql)) {
			session_start();
			session_unset(); 
			// destroy the session 
			session_destroy(); 
			echo "success";
		} else {
			echo "error";
		}
	}




?>