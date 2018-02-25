<?php
echo "<html><body background='image.jpg'><table>\n\n";
echo "<link href='./bootstrap.min.css' rel='stylesheet' crossorigin='anonymous'>";
echo "<script src='./bootstrap.min.js' crossorigin='anonymous'></script>";
$f = fopen("petrol_products.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "<div class='col-md-4'>";
echo "<button class='button' onclick='window.location.href=\"phpcode1.php\"'>BACK TO PREVIOUS PAGE</button>";
echo "</div>";
echo "\n</table></body></html>";
?>