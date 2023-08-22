<?php
$cell = $_GET["cell"];
file_put_contents("log.txt", $cell, FILE_APPEND);




$cellColor = getColorCell("log.txt", "/[:;]/");
file_put_contents($cellColor);




function getColorCell($path, $pattern){
	$str = file_get_contents($path);
	$result = array_filter(preg_split($pattern, $str));
	$chanks = array_chunk($result, 2);
	$result = array_combine(array_column($chanks,0), array_column($chanks,1));
	$result = json_encode($result);
	return $result;
}













