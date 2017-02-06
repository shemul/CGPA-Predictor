<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>
<?php

	function  loadTable($qry , $type){

		if($qry=="") {
			$sql = "SELECT * FROM trained limit 50";
		    $result = mysqli_query(get_db_connection(),$sql);
		   
		    $rows = array();

		    while($r = mysqli_fetch_assoc($result)) {
			    $rows[] = $r;
			}

			return json_encode($rows);
		} else {

			$sql = "SELECT * FROM trained WHERE $type ='$qry'";
		    $result = mysqli_query(get_db_connection(),$sql);
		   
		    $rows = array();

		    while($r = mysqli_fetch_assoc($result)) {
			    $rows[] = $r;
			}

			return json_encode($rows);
		}
		
		
    	
	}
	
?>