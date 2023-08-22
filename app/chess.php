<?php

$symbolsList = range('A', 'Z');

$countCol = 8;
$countRow = 8;

$symbols = range("A", $symbolsList[$countCol - 1]);
$numbers = range($countRow, 1);

$cellList = getCellList($numbers, $symbols);

$colorList = getColorList("ajax/log.txt", "/[:;]/");

$cellList = activateColor($colorList, $cellList);

$board = "<table class='board'>";

$board .= getSymbolsLine($symbols, $countRow);

foreach (array_chunk($cellList, $countRow, TRUE) as $key => $value) {
	$board .= "<tr>";

	$board .= "<td class='coordinates'>$numbers[$key]</td>";
	foreach ($value as $k => $v) {

		$board .= "<td class='cell_board' data-cell='$k' style='background-color:" . $v['color'] . "'>$k</td>";
	}
	$board .= "<td class='coordinates'>$numbers[$key]</td>";
	$board .= "</tr>";
}

$board .= getSymbolsLine($symbols, $countRow);

$board .= "</table>";


echo $board;

function activateColor($colorList, $cellList)
{
	if (!empty($colorList)) {
		foreach ($colorList as $key => $val) {
			$cellList[$key]['color'] = $val;
		}
	}
	return $cellList;
}

function getSymbolsLine($symbols, $countRow)
{
	$str = "<tr>";
	$str .= "<td class=\"coordinates\"></td>";
	for ($col = 1; $col <= $countRow; $col++) {
		$str .= "<td class=\"coordinates\">" . $symbols[$col - 1] . "</td>";
	}
	$str .= "<td class=\"coordinates\"></td>";
	$str .= "</tr>";
	return $str;
}

function getCellList($numbers, $symbols)
{
	foreach ($numbers as $number) {

		foreach ($symbols as $symbol) {

			$cellList[$symbol . $number] = ["color" => "white"];
		}
	}
	return $cellList;
}

function getColorList($path, $pattern)
{
	$str = file_get_contents($path);
	$result = array_filter(preg_split($pattern, $str));
	$chanks = array_chunk($result, 2);
	$colorList = array_combine(array_column($chanks, 0), array_column($chanks, 1));
	return $colorList;
}

?>


           