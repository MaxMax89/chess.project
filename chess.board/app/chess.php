<?php

$symbols = range('A','Z');

$countRow = 8;
$countCol = 8;

$userColorOne = "green";
$userColorTwo = "blue";

$symbolBoard = getSymbols($symbols, $col);

$tableBoard = "<table class =\"board\">";

$tableBoard .= getTrSymbols($symbols, $countCol);

for ($row = 1 ; $row <= $countRow ; $row++) { 
    $tableBoard .= "<tr>";

    $numbersBoard = getNumbers($countRow);
    $tdNumbers = getTdNumbers($numbersBoard, $row);
    
    $tableBoard .= $tdNumbers;

    for ($col = 1; $col <= $countCol ; $col++) {
        
        $symbolBoard = getSymbols($symbols, $col);
        $color = getColor($userColorOne, $userColorTwo, $row, $col);
        $tdBoard = getTdBoard($color, $symbolBoard, $numbersBoard, $row);
        
        
        $tableBoard .= $tdBoard;
           
    }
    $tableBoard .= "</tr>";
}

$tableBoard .= "</table>";

echo $tableBoard;






function getTrSymbols($symbols, $countCol){
    $trSymbols  = "<tr>";
    $trSymbols .= "<td class=\"coordinates\"></td>";
    for ($x=0; $x < $countCol; $x++) { 
        $trSymbols .= "<td class=\"coordinates\">".$symbols[$x]."</td>";
    }
    $trSymbols .= "</tr>";
    return $trSymbols;
}

function getTdNumbers($numbersBoard, $row){
    $tdNumbers = "<td class=\"coordinates\">".$numbersBoard[$row - 1]."</td>";
    return $tdNumbers;
}

function getTdBoard($color, $symbolBoard, $numbersBoard, $row){
    $tdBoard = "<td style=\"background-color:".$color." \" class=\"white\">";
    $tdBoard .= $symbolBoard.$numbersBoard[$row - 1]."</td>";
    return $tdBoard;
}

function getColor($userColorOne, $userColorTwo, $row, $col){
    $color = $userColorOne;
    if($row % 2 != 0){
        if($col % 2 != 0){
            $color = $userColorTwo;
        }
    }
    else{
        if($col % 2 == 0){
            $color = $userColorTwo;
        }
    }
    return $color;
}


function getNumbers($countRow){
    $numbers = [];
    for ($i = $countRow; $i > 0 ; $i--) { 
    $numbers[] = $i;   
    }
    return $numbers;
}

function getSymbols($symbols, $col){
    $symbolBoard = $symbols[$col - 1];
    return $symbolBoard;
}













    
    




    

           







?>


           
