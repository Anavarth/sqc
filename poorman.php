<?php
if( isset($_GET['N']))
{
	$N = $_GET['N'];
	echo "<link href='./bootstrap.min.css' rel='stylesheet' crossorigin='anonymous'>";
	echo "<script src='./bootstrap.min.js' crossorigin='anonymous'></script>";
	echo "<form class='form-horizontal' action='poorman1.php' method='get'>";
	for($x = 0;$x < $N;$x++)
	{
		echo "<div class='col-md-4'>";
		echo "Enter the sample size to check the quality of products: <input name='mytext[]' type='text' placeholder='Enter the value.'>";
		echo "</div>";
	}
	echo "<div class='form-group'>";
	echo "<label class='col-md-4 control-label' for='submit'>";
	echo "</label>";
	echo "<div class='col-md-4'>";
	echo "<input type='submit' class='btn btn-info' value='Run Simulation'>";
	echo "</div>";
	echo "</div>";
	echo "</form>";
}
 ?>