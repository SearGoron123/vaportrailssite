<?php
$ntimer = $_GET['ntimer']*1000;
$data = "var carouseltime = ".$ntimer.";\n";

$f = "../script/index.js";

// read into array
$arr = file($f);

// edit first line
$arr[1] = $data;

// write back to file
file_put_contents($f, implode($arr));

echo "Slide Show Time Has Been Changed";
?>