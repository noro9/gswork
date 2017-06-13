<?php
$filename = "data/data.csv";
$ar = array();

$fop = fopen($filename,"r");
while(!feof($fop)){
    $txt = fgets($fop);
    $exp = explode(",",$txt);
    array_push($ar,$exp);
}

fclose($fop);
$json = json_encode($ar);
echo $json;
 ?>
