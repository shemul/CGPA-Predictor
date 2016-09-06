<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php
	
	


	if(isset($_GET["get_all_data"])) {
		$id = $_GET["get_all_data"];
		
		$sql = "SELECT * FROM trained WHERE id='$id'";
	    $result = mysqli_query(get_db_connection(),$sql);
	   	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	    $rows = array();
		$rows[] = $row;

		//var_dump($row);
		echo json_encode($row);
	}

	
	


	if(isset($_POST["eng"])) {

		$id = $_POST["id"];

		$eng = $_POST["eng"];
		$mat = $_POST["mat"];
		$phy = $_POST["phy"];
		$che = $_POST["che"];
		$bio = $_POST["bio"];
		$pl1 = $_POST["pl1"];
		$pl2 = $_POST["pl2"];
		$dat = $_POST["dat"];
		$alg = $_POST["alg"];
		$toc = $_POST["toc"];
		
		$sql = "UPDATE trained SET eng='$eng' , mat = '$mat' , che = '$che' , bio = '$bio', pl1 = '$pl1', pl2 = '$pl2'
		, dat = '$dat', alg = '$alg', toc = '$toc' WHERE id= $id";
		
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

	if(isset($_GET["delete_table_test"])) {
		$id = $_GET["delete_table_test"];
		$sql = "DELETE FROM test WHERE id = $id ";
		if($result = mysqli_query(get_db_connection(),$sql)) {
			header('location:../../test.php');
		} else {
			echo "An unhandled error has occured ! sorry for that";
		}
	}




	
?>