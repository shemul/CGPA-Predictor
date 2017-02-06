<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/connection/db_conn.php'; ?>

<?php
	function  add_user($full_name , $student_id , $email,$password){
		$query = "INSERT INTO users(full_name , student_id , email, password) VALUES('$full_name', '$student_id','$email', '$password')";
		return mysqli_query(get_db_connection(), $query);
	}
	function edit_email($id, $email, $label, $person_id){
	}
	function remove_email($id){
	}
	function get_all_email(){
	}
	function get_email_by_id($id){
	}
?>