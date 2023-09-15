<?php

$colorList = ["darkgray", "red", "orange", "yellow", "green", "blue", "indigo", "violet", "white"];

$boardColors  = "<table class='board_color'>";
$boardColors .= "<tr>";

foreach ($colorList as $value) {
	$boardColors .= "<td class='select_color'";
	$boardColors .= " data-bgcolor='$value'";
	$boardColors .= "bgcolor='$value'></td>";
}


$boardColors .= "</tr>";
$boardColors .= "</table>";

echo $boardColors;