<?php

$alphapet = range('A', 'Z');

$countCol = 8;
$countRow = 8;

$symbols = range("A", $alphapet[$countCol - 1]);
$numbers = range($countRow, 1);

echo getChessBoard($symbols, $numbers);











function getChessBoard($symbols, $numbers){

	$board = "<table class='board'>";

	foreach ($numbers as $number) {

		$board .= "<tr>";
		$board .= "<td class='coordinates'>$number</td>";
		foreach ($symbols as $symbol) {

			$board .= "<td class='cell_board'>" . $symbol . $number . "</td>";
		}
		$board .= "<td class='coordinates'>$number</td>";
		$board .= "</tr>";
	}

	$board .= "</table>";
	return $board;
}

?>


           