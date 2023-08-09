<?php

$colorList = ["black", "red", "orange", "yellow", "green", "blue", "indigo", "violet"];

$boardColors = "<table class='board_color'>";
$boardColors .= "<tr>";

foreach ($colorList as $value){
	$boardColors .= "<td data-cell='$value' class='select_color' bgcolor='$value'></td>";
}


$boardColors .= "</tr>";
$boardColors .= "</table>";

echo $boardColors;