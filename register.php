
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="lib/css/login.css">
	
</head>
<body>



	<div align="center" class="container">
		<div class="login">
			<form action="#" enctype="multipart/form-data" method="post">
				<legend class="caption">
					Sign Up
				</legend>
				<input id="full_name" class="inp-text" name=""  placeholder="Full name" type="text" size="30" /><br/>
				<input id="student_id" class="inp-text"  name="" placeholder="XX-XXXXX-X" type="text" size="30" /><br/>
				<input id="email" class="inp-text" name=""  placeholder="Email/Username" type="text" size="30" /><br/>
				<input id="pass"  class="inp-text" name=""  placeholder="Password" type="password" size="30" />
				
			 	<input name="file_upload" id="file_upload" class="inp-text" name=""  value="upload" type="file" size="50" /><br/>

				<p>
					<button id="btnRegister" class="submit-button">Sign Up</button>
				</p>

				<input id="terms" type="checkbox" name="">Agree Terms of Service <Br><br>
		        
		        <h6 id="error" id="error">Whooops ! </h6>
			</form>	
		</div>
	</div>
	<p align="center" style="color:white">Already registered ? <a href="login.php">Login here</p></a>
<script src="lib/js/common.js"></script>	
<script src="lib/js/register.js"></script>
</body>
</html>

