<meta charset="utf-8"/>
<?php

function hello($name) {
  $text = 'привет '.name;
  return $text;
}
echo  hello('Колян');





function one_function($num) {
  return $num * $num;              // Вернет квадрат числа
}

   echo one_function(5) //25  
        

//  Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.




   function weekday($day_number) {
     $array = [1 => 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
      return $array[$day_number];
   }
  echo "сегодня".  .weekday(3);  // сегодня среда
 


// Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.

$arrey_nums = [4,9,23,15,4,5,3];
  $flag = false;          

 foreach ($arrey_nums as $value) {
     if ($value == 5){
      $flag = true;
      break;
     }
 }

 if ($flag === true) {
    echo 'Есть!';
 } else {
  echo 'Нет!';
 }

 // второй вариант с помощью пользовательской финкции

 $arrey_nums = [4,9,23,15,4,5,3];
  function one_function($arrey_nums) {
    foreach ($arrey_nums as $value) {
      if ($value == 5) {
        return true;
      }
    }
    return false ;
  }
    
?>