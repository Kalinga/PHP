<?php
$dir = "Downloads/";

echo "<html>";
echo "<body>";
// Sort in ascending order - this is default
$a = scandir($dir);
foreach ($a as $f ) {
	print $f;
	print '<a href="'.$dir.$f.'"'. $f. '/>';
	echo "<br/>";
}

// Sort in descending order
$b = scandir($dir,1);

//print_r($a);
//echo "<br/><br/><br/><br/><br/>";
//print_r($b);
echo "</html>";
echo "</body>";
?>