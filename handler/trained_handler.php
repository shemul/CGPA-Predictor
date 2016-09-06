<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/trained_service.php';

	if(isset($_GET['load'])){

		$result = loadTable("", "");
		echo $result;
	}
	if(isset($_GET["search"])){
		$type = $_GET["type"];
		$result = loadTable($_GET['search'] , $type);
		echo $result;
	}
	
	
?>