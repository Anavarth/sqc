<?php
$capture_field_vals ="";
if(isset($_GET["mytext"]) && is_array($_GET["mytext"]))
{
	foreach($_GET["mytext"] as $key => $text_field)
	{
		$capture_field_vals .= $text_field .",";
	}
}
//echo $capture_field_vals;
exec("Rscript sqcc.R $capture_field_vals");
echo "<link href='./bootstrap.min.css' rel='stylesheet' crossorigin='anonymous'>";
echo "<script src='./bootstrap.min.js' crossorigin='anonymous'></script>";
echo "<p style='float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'><img src='ewma.png' style='width: 100%'>EWMA CHART</p>";
echo "<p style='float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'><img src='rchart.png' style='width: 100%'>R CHART</p>";
echo "<p style='float: left; font-size: 9pt; text-align: center; width: 30%; margin-right: 1%; margin-bottom: 0.5em;'><img src='xbar.png' style='width: 100%'>X BAR CHART</p>";
echo "<button class='button' onclick='window.location.href=\"phpcode1.php\"'>BACK TO HOME PAGE</button>";
?>