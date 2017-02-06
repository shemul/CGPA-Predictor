<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php

	function  loadTable($type){

		if($type==1) {
			$sql = "SELECT * FROM test limit 50";
		    $result = mysqli_query(get_db_connection(),$sql);
		   
		    $rows = array();

		    while($r = mysqli_fetch_assoc($result)) {
			    $rows[] = $r;
			}

			return json_encode($rows);
		} else {
			$sql = "SELECT * FROM test WHERE id='$type'";
		    $result = mysqli_query(get_db_connection(),$sql);
		   
		    $rows = array();

		    while($r = mysqli_fetch_assoc($result)) {
			    $rows[] = $r;
			}

			return json_encode($rows);
		}
		
    	
	}
	
?>