<?php

$info = $_REQUEST["info"];

file_put_contents("log.txt", $info, FILE_APPEND);

