<?php require_once 'lib/partial/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/update_service.php'; ?>

<article>
	
	<button id="btnremove">RESET FORM</button>
	<button id="btnsave" style="background-color :#4CAF50" class="btnUpdate">SAVE</button>
  	<h1>add new train data</h1>

  	
	<div id="table-wrapper">
	  <div id="form_content">
		
		<div>
			ENGLISH
			<input id="eng"  class="inp-text" name=""   type="text" size="50" />
			MATHMATICS
			<input id="mat" class="inp-text" name=""   type="text" size="50" />
			PHYSICS
			<input id="phy" class="inp-text" name=""   type="text" size="50" />
			CHEMISTRY
			<input id="che" class="inp-text" name=""   type="text" size="50" />
			BIOLOGY
			<input id="bio" class="inp-text" name=""   type="text" size="50" />
			

		
		</div>


	   </div>
	   <div id="form_content2">
		   	<div>

				PL1
				<input id="pl1"  class="inp-text" name=""  type="text" size="50" />
				PL2
				<input id="pl2" class="inp-text" name=""   type="text" size="50" />
				DATA STRUCTURE
				<input id="dat" class="inp-text" name=""   type="text" size="50" />
				ALGORIHMS
				<input id="alg" class="inp-text" name=""   type="text" size="50" />
				TOC
				<input id="toc" class="inp-text" name=""   type="text" size="50" />

			 	<div id="message" class="isa_success hidden">
				    <i class="fa fa-info-circle"></i>
				    PROFILE UPDATE SUCCESSFULLY
				</div>
				 
			</div>
	   </div>
	</div>
</article>

<?php require_once 'lib/partial/footer.php'; ?>
<script type="text/javascript" src="lib/js/add_into_train.js"></script>
<script src="lib/js/common.js"></script>
</div>

</body>
</html>
