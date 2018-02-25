<?php
echo "<html><body background='pexels-photo-255379.jpg'><table>\n\n";
echo "<link href='./bootstrap.min.css' rel='stylesheet' crossorigin='anonymous'>";
echo "<script src='./bootstrap.min.js' crossorigin='anonymous'></script>";
$f = fopen("crude_and_ng.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "<button class='button' onclick='window.location.href=\"phpcode1.php\"'>BACK TO PREVIOUS PAGE</button>";
echo "\n</table></body></html>";
?>