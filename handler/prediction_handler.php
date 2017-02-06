<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/prediction_service.php';

	if(isset($_GET['predict'])){

		echo "check";
	}

	
	if(isset($_GET['search'])){

		$result = loadTable($_GET['search']);
		echo $result;
	}

?>