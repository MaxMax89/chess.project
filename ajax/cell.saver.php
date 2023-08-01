<?php
$cell = $_GET["cell"];

if ($_GET["cmd"] == "add") {
	activateCell($cell, "log.txt");
}

if ($_GET["cmd"] == "dell") {
	deactivateCell($cell, "log.txt");
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













