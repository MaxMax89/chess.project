<?php
$colorList = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet', 'black', 'white', 'silwer',];

$usercountRow =  clearDate($_POST['countRow']);
$usercountCol = clearDate($_POST['countCol']);

$userColorOne = clearDate($_POST['colorOne']);
$userColorTwo = clearDate($_POST['colorTwo']);

$errorText = [];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(strlen($userColorOne) > 10){
        $userColorOne = false;
        $errorText['colorOne'] = '<small class="error_text">максимум 10 символов</small>';
    }

    if(empty($userColorOne)){
        $userColorOne = 'white';
    }

    if(!in_array($userColorOne, $colorList)){
        $userColorOne = 'white';
        $errorText['colorOne'] = '<small class="error_text">цвет отсутствует в списке</small>';
    }
    

    if(strlen($userColorTwo) > 10){
        $userColorTwo = false;
        $errorText['colorTwo'] = '<small class="error_text">максимум 10 символов</small>' ;
    }

    if(empty($userColorTwo)){
        $userColorOne = 'white';
    }

    if(!in_array($userColorTwo, $colorList)){
        $userColorOne = 'white';
        $errorText['colorTwo'] = '<small class="error_text">цвет отсутствует в списке</small>';
    }
}


function clearDate($value){
    $value = trim($value);
    $value = stripcslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}


?>