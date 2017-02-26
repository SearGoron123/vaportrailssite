<?php
$fn = "../flavors.xml";
$myfile = fopen($fn, "a+") or die("Unable to open file!");
$flavorname = $_POST["remflavorname"];
$xml = "<flavor><name>".$flavorname."</name></flavor>";
$contents = file_get_contents($fn);
$contents = str_replace($xml, '', $contents);
file_put_contents($fn, $contents);
fclose($myfile);
header("Location: Administration.php"); /* Redirect browser */
exit();
?>