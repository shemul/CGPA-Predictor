<?php require_once 'lib/partial/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/update_service.php'; ?>

<article>
	
	<button id="btnremove">RESET FORM</button>
	<button id="btnPredict" style="background-color :#4CAF50" class="btnUpdate">GET PREDICTION</button>
  	<h1>prediction</h1>

  	
	<div id="table-wrapper">
	  <div id="form_content">
		<form class="form-signin"  role="form">
		<div>
			<h1> Current Semester </h1>
			ENGLISH
			
				<input id="eng"  class="inp-text" name="eng"   type="text" size="50" />
			
			MATHMATICS
			<input id="mat" class="inp-text" name="mat"   type="text" size="50" />
			PHYSICS
			<input id="phy" class="inp-text" name="phy"   type="text" size="50" />
			CHEMISTRY
			<input id="che" class="inp-text" name="che"   type="text" size="50"  />
			BIOLOGY
			<input id="bio" class="inp-text" name="bio"   type="text" size="50" />
			
			PL1
			<input id="pl1"  class="inp-text" name="pl1"  type="text" size="50" />

			<input id="data_id" class="inp-text" name="" value=<?php echo $_GET["predict"]; ?>  type="hidden" size="50" />
		
		</div>
		</form>

	   </div>
	   <div id="form_content2">
	   	  <h1> Second Semester (Predict) </h1>
		   	<div>
				PL2
				<input id="pl2" class="inp-text" name=""   type="text" size="50" disabled />
				DATA STRUCTURE
				<input id="dat" class="inp-text" name=""   type="text" size="50" disabled />
				ALGORIHMS
				<input id="alg" class="inp-text" name=""   type="text" size="50" disabled />
				TOC
				<input id="toc" class="inp-text" name=""   type="text" size="50" disabled />

			 	<div id="message" class="isa_success hidden">
				    <i class="fa fa-info-circle"></i>
				    PROFILE UPDATE SUCCESSFULLY
				</div>
				 
			</div>
	   </div>
	</div>
</article>

<?php require_once 'lib/partial/footer.php'; ?>
<script src="lib/js/jquery.js"></script>
<script type="text/javascript" src="lib/js/predict.js"></script>
<script src="lib/js/common.js"></script>

</div>


</body>
</html>
