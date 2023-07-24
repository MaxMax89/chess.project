<?php
$addAttributeCell = $_GET["cell"];
file_put_contents("log.txt", $addAttributeCell . ";", FILE_APPEND);

$attributes = str_split(file_get_contents("log.txt"), 3);

$delAttributeCell = deactivateCell($attributes);

file_put_contents("log.txt", $delAttributeCell);


function deactivateCell($attributes)
{
	$elCounts = array_count_values($attributes);
	for ($i = 0; $i < count($attributes); $i++) {
		foreach ($elCounts as $key => $value) {
			if ($attributes[$i] == $key && $value == 1) {
				$delAttributeCell[] = $attributes[$i];
				break;
			}
		}
	}
	return $delAttributeCell;
}


