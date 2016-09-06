<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/test_service.php';

	if(isset($_GET['load'])){

		$result = loadTable(1);
		echo $result;
	}

	
	if(isset($_GET['search'])){

		$result = loadTable($_GET['search']);
		echo $result;
	}

?>