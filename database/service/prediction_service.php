<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php
	

	if(isset($_POST["get_data"])) {

		$id = $_POST["get_data"];

		
		$sql = "SELECT * FROM test WHERE id='$id'";
	    $result = mysqli_query(get_db_connection(),$sql);
	   	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	    $rows = array();
		$rows[] = $row;

		//var_dump($row);
		echo json_encode($row);
		//echo "succ";
			
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