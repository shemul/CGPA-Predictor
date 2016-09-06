<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php
	

	if(isset($_POST["eng"])) {

	

		$eng = $_POST["eng"];
		$mat = $_POST["mat"];
		$phy = $_POST["phy"];
		$che = $_POST["che"];
		$bio = $_POST["bio"];
		$pl1 = $_POST["pl1"];
		
		
	
		$sql = "INSERT INTO test (eng, mat, phy, che, bio, pl1) VALUES ( '$eng', '$mat', '$phy', '$che','$bio','$pl1')";

		if($result = mysqli_query(get_db_connection(),$sql)) {
			echo 'success';
		} else {
			echo "error";
		}

			
	}


	if(isset($_POST["delete"])) {
		$id = $_POST["id"];
		$sql = "DELETE FROM trained WHERE id = $id ";
		if($result = mysqli_query(get_db_connection(),$sql)) {
			echo 'success';
		} else {
			echo "error";
		}
	}


	if(isset($_GET["delete_table"])) {
		$id = $_GET["delete_table"];
		$sql = "DELETE FROM trained WHERE id = $id ";
		if($result = mysqli_query(get_db_connection(),$sql)) {
			header('location:../../trained.php');
		} else {
			echo "An unhandled error has occured ! sorry for that";
		}
	}


	
?>