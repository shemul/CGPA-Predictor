<?php require_once 'lib/partial/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/profile_service.php'; ?>

<article>
	
	<button id="btnremove">DEACTIVATE</button>
	<button id="updateUser" class="btnUpdate">UPDATE</button>
  	<h1 id="gretting">Hello , <?php echo getFullName(); ?></h1>

  	
	<div id="table-wrapper">
	  <div id="form_content">
		
		<div>

			<h3>FULL NAME</h3>
			 <input id="full_name"  class="inp-text" name="" placeholder="Full name" value="<?php echo getFullName(); ?>" type="text" size="50" /><br/>
			 <h3>STUDENT ID</h3>
			 <input id="student_id" class="inp-text" name=""  value="<?php echo getStudentId(); ?>" type="text" size="50" /><br/>
			 <h3>EMAIL</h3>
			 <input id="email" class="inp-text" name=""  value="<?php echo getEmail(); ?>" type="text" size="50" /><br/>
			 <h3>PASSWORD</h3>
			 <input id="password" class="inp-text" name=""  value="<?php echo getPassword(); ?>" type="password" size="50" /><br/>

			 <input id="userId" class="inp-text" name=""  value="<?php echo getUserId(); ?>" type="hidden" size="50" /><br/>

		
		</div>


	   </div>
	   <div id="form_content2">
		   	<div>

				<h3>PROFILE PIC</h3>
				<img src="<?php echo getProfilePic(); ?>" width="250" height="250"><br>
				<h3>CHANGE DP</h3>
			 	<input id="file" class="inp-text" name=""  type="file" size="50" /><br/>

			 	<div id="message" class="isa_success hidden">
				    <i class="fa fa-info-circle"></i>
				    PROFILE UPDATE SUCCESSFULLY
				</div>
				 
			</div>
	   </div>
	</div>
</article>

<?php require_once 'lib/partial/footer.php'; ?>
<script type="text/javascript" src="lib/js/profile.js"></script>
</div>

</body>
</html>
