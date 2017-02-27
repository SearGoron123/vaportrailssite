<?php
$data = "var sshowimgtotal = ".$_GET['imgnumber'].";\n";

$f = "../script/index.js";

// read into array
$arr = file($f);

// edit first line
$arr[0] = $data;

// write back to file
file_put_contents($f, implode($arr));

echo "Slide Show Image Number Has Been Changed";
?>