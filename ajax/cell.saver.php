<?php
$addCell = $_GET["addCell"];
$dellCell = $_GET["dellCell"];


activateCell($addCell, "log.txt");
deactivateCell($dellCell, "log.txt");


function deactivateCell($dellCell, $path)
{
	if (!empty($dellCell)) {
		$cells = file_get_contents($path);
		$cells = str_replace($dellCell . ";", "", $cells);
		file_put_contents($path, $cells);

	}
}


function activateCell($addCell, $path)
{
	if (!empty($addCell)) {
		$addCell = substr_replace($addCell, ";", 2);
		file_put_contents($path, $addCell, FILE_APPEND);
	}
}













