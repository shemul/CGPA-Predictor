<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$target_dir = "uploads/";
		$target_file = $target_dir . $_POST['student_id'] . '.jpg';
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		move_uploaded_file($_FILES["photo_file"]["tmp_name"], $target_file);

		$success = "Success registered";
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="lib/css/login.css">
	
</head>
<body>

	<div align="center" class="container">
		<div class="login">
			<form action="register.php" method="post" onsubmit="return validateSubmit()" enctype="multipart/form-data">
				<legend class="caption">
					Sign Up
				</legend>
				<input id="full_name" class="inp-text" name=""  placeholder="Full name" type="text" size="30" /><br/>
				<input id="student_id" class="inp-text"  name="student_id" placeholder="XX-XXXXX-X" type="text" size="30" /><br/>
				<input id="email" class="inp-text" name=""  placeholder="Email" type="text" size="30" /><br/>
				<input id="pass"  class="inp-text" name=""  placeholder="Password" type="password" size="30" />
				
			 	<input name="photo_file" id="photo_file" class="inp-text" name=""  value="upload" type="file" size="50" /><br/>

				<p>
					<button id="btnRegister" value="form_submit" class="submit-button">Sign Up</button>
				</p>

				<input id="terms" type="checkbox"  name="">Agree Terms of Service <Br><br>
		        
		        <h6 id="error" id="error">Whooops ! </h6>
		        <h6 id="error2" id="error2"><?php if(isset($success)) { echo  $success;} ?></h6>
			</form>	
		</div>
	</div>
	<p align="center" style="color:white">Already registered ? <a href="login.php">Login here</p></a>
<script src="lib/js/common.js"></script>	
<script src="lib/js/register.js"></script>
</body>
</html>

