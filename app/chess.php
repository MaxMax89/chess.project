<?php

$symbols = range('A','Z');

$userCountRow = clearDate($_POST['countRow']);
$userCountCol = clearDate($_POST['countCol']);

$userColorOne = clearDate($_POST['colorOne']);
$userColorTwo = clearDate($_POST['colorTwo']);

$errorMessegeColor = '<small class="error_text">максимум 10 символов</small>';
$errorMessegeCount = '<small class="error_text">Только число от 1 до 26</small>';

$defaultValue = 8;

$errorText = [];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(strlen($userColorOne) > 10){
        $userColorOne = false;
        $errorText['colorOne'] = $errorMessegeColor;
    }
    
    if(strlen($userColorTwo) > 10){
        $userColorTwo = false;
        $errorText['colorTwo'] = $errorMessegeColor;
    }

    if(!filter_var($userCountRow,  FILTER_VALIDATE_INT) || $userCountRow > 26){
        $userCountRow = false;
        $errorText['countRow'] = $errorMessegeCount;
    }
   
    if(!filter_var($userCountCol,  FILTER_VALIDATE_INT) || $userCountCol > 26){
        $userCountCol = false;
        $errorText['countCol'] = $errorMessegeCount;
    }
}

$countRow = getCountRow($userCountRow, $defaultValue);
$countCol = getCountCol($userCountCol, $defaultValue);

$symbolBoard = getSymbols($symbols, $col);

   include("inc/form.php");

$tableBoard = "<table class =\"board\">";

$tableBoard .= getTrSymbols($symbols, $countCol);

for ($row = 1 ; $row <= $countRow ; $row++) { 
    $tableBoard .= "<tr>";

    $numbersBoard = getNumbers($countRow);
    $tdNumbers = getTdNumbers($numbersBoard, $row);
    
    $tableBoard .= $tdNumbers;

    for ($col = 1; $col <= $countCol ; $col++) {

        $classTd = getClassTd($row, $col);
        $symbolBoard = getSymbols($symbols, $col);
        $color = getColor($userColorOne, $userColorTwo, $row, $col);
        $tdBoard = getTdBoard($color, $symbolBoard, $numbersBoard, $row, $classTd);
        
        
        $tableBoard .= $tdBoard;
           
    }
     $tableBoard .= $tdNumbers;
    $tableBoard .= "</tr>";
}
$tableBoard .= getTrSymbols($symbols, $countCol);
$tableBoard .= "</table>";

echo $tableBoard;


function clearDate($value){
    $value = trim($value);
    $value = stripcslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

function getClassTd($row, $col){
    $classTd = 'black';
    if($row % 2 != 0){
        if($col % 2 != 0){
            $classTd = 'white';
        }
    } else {
        if($col % 2 == 0){
            $classTd = 'white';
        }
    }
    return $classTd;
}

function getCountCol($userCountCol, $defaultValue){
    if(isset($userCountCol)){
        $countCol = $userCountCol;
    } 
    if(empty($userCountCol)){
        $countCol = $defaultValue;
    }
    return $countCol;
}

function getCountRow($userCountRow, $defaultValue){
    if(isset($userCountRow)){
        $countRow = $userCountRow;
    } 
    if(empty($userCountRow)){
        $countRow = $defaultValue;
    }
    return $countRow;
}


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

function getTdBoard($color, $symbolBoard, $numbersBoard, $row, $classTd){
    $tdBoard = "<td style=\"background-color:".$color." \" class=\"".$classTd."\">";
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


           