<?php

$symbols = range('A', 'Z');


$countRow = 8;
$countCol = 8;

$blackCell = explode(";", file_get_contents("ajax/log.txt"));


$tableBoard = "<table class =\"board\">";

$tableBoard .= getTrSymbols($symbols, $countCol);

for ($row = 1; $row <= $countRow; $row++) {
	$tableBoard .= "<tr>";

	$numbersBoard = getNumbers($countRow);
	$tdNumbers = getTdNumbers($numbersBoard, $row);

	$tableBoard .= $tdNumbers;

	for ($col = 1; $col <= $countCol; $col++) {
		$symbolBoard = getSymbols($symbols, $col);
		$dataCell = $symbolBoard . $numbersBoard[$row - 1];
		$tdBoard = getTdBoard($symbolBoard, $numbersBoard, $row, $dataCell, $blackCell);

		$tableBoard .= $tdBoard;

	}
	$tableBoard .= $tdNumbers;
	$tableBoard .= "</tr>";
}
$tableBoard .= getTrSymbols($symbols, $countCol);
$tableBoard .= "</table>";

echo $tableBoard;

function getTdBoard($symbolBoard, $numbersBoard, $row, $dataCell, $blackCell)
{
	if (in_array($dataCell, $blackCell)) {
		$tdBoard = "<td data-cell=" . $dataCell . " class='white black'>";
		$tdBoard .= $symbolBoard . $numbersBoard[$row - 1] . "</td>";
	} else {
		$tdBoard = "<td data-cell=" . $dataCell . " class='white'>";
		$tdBoard .= $symbolBoard . $numbersBoard[$row - 1] . "</td>";
	}
	return $tdBoard;
}


function getTrSymbols($symbols, $countCol)
{
	$trSymbols = "<tr>";
	$trSymbols .= "<td class=\"coordinates\"></td>";
	for ($x = 0; $x < $countCol; $x++) {
		$trSymbols .= "<td class=\"coordinates\">" . $symbols[$x] . "</td>";
	}
	$trSymbols .= "</tr>";
	return $trSymbols;
}

function getTdNumbers($numbersBoard, $row)
{
	$tdNumbers = "<td class=\"coordinates\">" . $numbersBoard[$row - 1] . "</td>";
	return $tdNumbers;
}


function getNumbers($countRow)
{
	$numbers = [];
	for ($i = $countRow; $i > 0; $i--) {
		$numbers[] = $i;
	}
	return $numbers;
}

function getSymbols($symbols, $col)
{
	$symbolBoard = $symbols[$col - 1];
	return $symbolBoard;
}


?>


           