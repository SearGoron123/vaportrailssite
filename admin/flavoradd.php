<?php
$fn = "../flavors.xml";
$myfile = fopen($fn, "a+") or die("Unable to open file!");
$flavorname = $_POST["flavorname"];
$xmlc = "</content>";
$contents = file_get_contents($fn);
$contents = str_replace($xmlc, '', $contents);
file_put_contents($fn, $contents);
$xmleo = "<flavor>";
$xml = "<name>".$flavorname."</name>";
$xmlec = "</flavor>";
fwrite($myfile,$xmleo);
fwrite($myfile,$xml);
fwrite($myfile,$xmlec);
fwrite($myfile,$xmlc);
fclose($myfile);
header("Location: Administration.php"); /* Redirect browser */
exit();
?>