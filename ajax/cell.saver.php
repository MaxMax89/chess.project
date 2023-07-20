<?php
$info = $_GET["info"];
file_put_contents("log.txt", $info, FILE_APPEND);




