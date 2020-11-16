<?php
$size = $_POST["size"];

echo "Table size: " . $size . "<br>";

echo "<table>" . "<tr>" . "<th />";

for ($i = 1; $i <= $size; $i++) {
	echo "<th>" . $i . "</th>"; 
}

echo "</tr>";

for ($i = 1; $i <= $size; $i++) {
	echo "<tr>" . "<th>" . $i . "</th>";
	for ($j = 1; $j <= $size; $j++) {
		echo "<td>" . ($i * $j) . "</td>"; 
	}
	echo "</tr>";
}


echo "</table>";


?>
