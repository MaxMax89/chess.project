<?php
$info = $_GET["info"];
file_put_contents("log.txt", $info, FILE_APPEND);
$logTxt = str_split(file_get_contents("log.txt"), 2);

$logInfoTxt = getLogInfo($logTxt);

file_put_contents("log.txt", $logInfoTxt);








function getLogInfo($logTxt){
	$elCounts = array_count_values($logTxt);
	$logInfoTxt = [];

	for ($i = 0; $i < count($logTxt); $i++){
		foreach ($elCounts as $key => $value){
			if($logTxt[$i] == $key && $value == 1){
				$logInfoTxt[] = $logTxt[$i];
				break;
			}
		}
	}
	return $logInfoTxt;
}


