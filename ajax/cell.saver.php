<?php
$cell = $_GET["cell"];
$bgCell = $_GET["color"];

if ($_GET["cmd"] == "add") {
	activateCell($cell, "log.txt");
}

if ($_GET["cmd"] == "dell") {
	deactivateCell($cell, "log.txt");
}

if ($_GET["cmd"] == "selectColor") {
	file_put_contents("bg.color.txt", $bgCell);
}

function deactivateCell($cell, $path)
{
	if (!empty($cell)) {
		$cells = file_get_contents($path);
		$cells = str_replace($cell . ";", "", $cells);
		file_put_contents($path, $cells);

	}
}


function activateCell($cell, $path)
{
	if (!empty($cell)) {
		$cell = substr_replace($cell, ";", 2);
		file_put_contents($path, $cell, FILE_APPEND);
	}
}













