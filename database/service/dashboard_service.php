<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>

<?php
	
	function getTotalTrained() {
		     
	      $sql = "SELECT * FROM trained";
	      $result = mysqli_query(get_db_connection(),$sql);
	      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      
	      $count = mysqli_num_rows($result);
	      
	      echo $count;
		   	
	}

	function getTotalCurrent() {
		     
	      $sql = "SELECT * FROM test";
	      $result = mysqli_query(get_db_connection(),$sql);
	      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      
	      $count = mysqli_num_rows($result);
	      
	      echo $count;
		   	
	}
?>