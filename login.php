<?php
  // Start the session
  session_start();
  if(isset($_SESSION['login_user'])) {
    header('location:dashboard.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="lib/css/login.css">
	
</head>
<body>



	<div align="center" class="container">
		<div class="login">

				<legend class="caption">
					Log in
				</legend>

				<input id="email" class="inp-text" name="" placeholder="Email/Username" type="text" size="30" /><br/>
				<input id="pass"  class="inp-text" name="" placeholder="Password" type="password" size="30" />

				<p>
					<button id="btnlogin" class="submit-button">Sign In</button>
				</p>

		        <a href="#"><h6 class="forget">Forget Password</h6></a>
		        <h6 id="error" id="error">Whooops ! </h6>
				
		</div>
	</div>
	<a href="register.php"><p align="center" style="color:white">Don't have an account ?</p></a>

<script src="lib/js/common.js"></script>
<script src="lib/js/login.js"></script>
</body>
</html>

