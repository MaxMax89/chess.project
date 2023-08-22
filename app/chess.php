<?php

$symbolsList = range('A', 'Z');

$countCol = 8;
$countRow = 8;

$symbols = range("A", $symbolsList[$countCol - 1]);
$numbers = range($countRow, 1);

$board = "<table class='board'>";

foreach ($numbers as $number) {

	$board .= "<tr>";
	$board .= "<td class='coordinates'>$number</td>";
	foreach ($symbols as $symbol) {

		$board .= "<td class='cell_board' data-cell='$symbol$number'>" . $symbol . $number . "</td>";
	}
	$board .= "<td class='coordinates'>$number</td>";
	$board .= "</tr>";
}

$board .= "</table>";


echo $board;







?>


           