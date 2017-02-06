 <?php
	function get_db_connection(){
		$servername = $IP;
		$username = "shemul";
		$password = "";
		$dbname = "c9";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Ops! Something wrong has happened!" . mysqli_connect_error());
		}
		
		return $conn;
	}
?>