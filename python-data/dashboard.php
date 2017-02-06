<?php require_once 'lib/partial/header.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/database/service/dashboard_service.php'; ?>


<article>
  <h1>Dashboard</h1>
  
  <div class="content">
      <div class="div1">
        
        <p id="train">Train Data </p>
        <p style="text-align: center;"><?php getTotalTrained() ?> </p>

      </div>

      <div class="div2">
      	<p>Test Data </p>
        <p style="text-align: center;"><?php getTotalCurrent() ?></p>
      </div>
  </div>
</article>

<?php require_once 'lib/partial/footer.php'; ?>
  
</div>

</body>
</html>
