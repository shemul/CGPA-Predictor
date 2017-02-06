<?php require_once 'lib/partial/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/dashboard_service.php';
	 
?>

<article>
	<a href="add_into_train.php"><button id="btnadd">ADD NEW ROW</button></a>
	<button id="btntrain">TRAIN AGAIN</button>
	
  	<h1>Trained Data - <?php getTotalTrained(); ?></h1>

  	
  	
	<div id="table-wrapper">
	  <div id="table-scroll">
		<div class="tables">
			
			<table border="1px" width="100%" id="tbl_data">
			  <tr style="background-color: green ; color : white">
			  	<th>ID</th>
			    <th>ENGLISH</th>
			    <th>MATH</th>
			    <th>PHY</th>
			    <th>CHE</th>
			    <th>BIO</th>
			    <th>PL1</th>
			    <th>PL2</th>
			    <th>DS</th>
			    <th>ALGO</th>
			    <th>TOC</th>
			    <th>ACTIONS</th>
			  </tr>
			  <tbody id="table_content">
			  	

			  </tbody>
			  
			  
			</table>


		</div>
	   </div>
	</div>
</article>

<?php require_once 'lib/partial/footer.php'; ?>
<script type="text/javascript" src="lib/js/trained.js"></script>
</div>

</body>
</html>
