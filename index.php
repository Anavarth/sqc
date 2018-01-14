<link href="./bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="./bootstrap.min.js" crossorigin="anonymous"></script>

<form class="form-horizontal" action="poorman.php" method="get">
<fieldset>

<!-- Form Name -->
<legend>Rnom</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="N">Enter the number of groups to check the quality of products:</label>  
  <div class="col-md-4">
  <input id="N" name="N" type="text" placeholder="Enter the value." class="form-control input-md" required="">  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
  <input type="submit" class="btn btn-info" value="Run Simulation">
  </div>
</div>
</fieldset>
</form>