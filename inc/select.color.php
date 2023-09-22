<?php

$colorList    = ["darkgray", "red", "orange", "yellow", "green", "blue", "indigo", "violet", "white"];
$currentColor = getCurrentColor('currentColor');


$boardColors  = "<table class='board_color'>";
$boardColors .= "<tr>";

foreach ($colorList as $color) {
	if ($color == $currentColor) {
		$boardColors .= "<td class='select_color active'";
		$boardColors .= " data-cell='$color'";
		$boardColors .= "bgcolor='$color'></td>";
	} else {
		$boardColors .= "<td class='select_color'";
		$boardColors .= " data-cell='$color'";
		$boardColors .= "bgcolor='$color'></td>";
	}

}

$boardColors .= "</tr>";
$boardColors .= "</table>";

echo $boardColors;

function getCurrentColor($cookieName)
{
	if (!empty($_COOKIE[$cookieName])) {
		$currentColor = $_COOKIE[$cookieName];
	} else {
		$currentColor = "darkgray";
	}
	return $currentColor;
}