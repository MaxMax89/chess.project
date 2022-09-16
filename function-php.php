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

$array_nums = [4,9,23,15,4,5,3];
  $flag = false;          

 foreach ($array_nums as $value) {
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

 $array_nums = [4,9,23,15,4,5,3];
  function one_function($arrey_nums) {
    foreach ($array_nums as $value) {
      if ($value == 5) {
        return true;
      }
    }
    return false ;
  }
 
for ($i=1; $i<=9 ; $i++) { 
  for ($j=1; $j <=$i ; $j++) { 
     echo $i;

  }
  echo '<br>';
}
            //Бывают задачи, в которых количество итераций цикла не известно заранее. К примеру: дано число, нужно делить его на 2 столько раз, пока результат не станет меньше 10. Нужно вывести число, которое при этом получится.

            // В этом случае мы не знаем количество итераций. Не беда - сделаем условием цикла условие пока число больше 10:
$num = 500;
while ($num > 10) {
  $num = $num / 2;
}
 echo $num;


          //Можно использовать и цикл for - в этом случае он будет без тела (без [] и в конце ставим точку с запятой):

 for ($num=500; $num < 10; $num = $num / 2);  
echo $num;
 
                               
 
   // Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.

 function one_function($a, $b){
    return $a == $b;
 }
    if (one_function(5,5) === true) {
      echo "yes";
   }else{
    echo 'no';
   } 

      // Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false

   function one_function($a,$b) {
     return ($a + $b) > 10;
   }

     if (one_function(7,5) === true) {
       echo 'yes';
     } else {
      echo 'no';
     }
 
         // Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.      


  function one_function($a){
    return $a < 0;
  }

if (one_function(-7) === true) {
       echo 'yes';
     } else {
      echo 'no';
     }

            // С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str

     for ($i=0; $i <= 9; $i++) { 
        $str .= $i;
     }
     echo $str;
         // С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str.

         for ($i=9; $i > 0 ; $i--) { 
           $str = $i;
         }
       echo $str;

          //С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str.

       for ($i=1; $i < 10; $i++) { 
         $str .= $i.'-';
       }
       echo $str;

               //Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5:

//x
//xx
 $str = '';       
for ($i=0; $i <=20 ; $i++) {  
    $str .= 'x';
    echo $str."<br>";
  }
                  //С помощью двух вложенных циклов нарисуйте следующую пирамидку:

for ($i = 1; $i < 10; $i++) { 
  for ($j = 1; $j <= $i; $j++) { 
    echo $i;
  }
  echo '<br>';
}
               //Задача: дан массив с числами, найдем сумму всех цифр из этих чисел.
 function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}

 function get_digits($num){
  return str_split($num, 1);
 }

function arrey_sum($arr){
  $sum = 0;
  foreach ($arr as  $value) {
    $sum  += $value;
  }
}

function in_range($num){
  $sum = arrey_sum(get_digits($num));
  return $sum >= 1 and $sum <= 9;
}


$array = [15,16,22,824,436,];
  $result[] = 0;
  foreach ($array as  $value) {
    $sum += array_sum(get_digits($value));
  }
echo $sum;


////////////////////////////////                     Функция inArray
//Задача: реализуйте функцию inArray, которая будет проверять, есть ли в массиве элемент с таким значением или нет. Первым параметром функция должна принимать значение, а вторым - массив. Если такой элемент есть - функция должна вернуть true, а если нет - false.





$arrayNum = [15,22,458,333,21,98];
  if (in_array(333, $arrayNum) === true) {
    echo 'Yes';
  } else {
    echo 'no';
  }
    
         //Задача: реализуйте функцию isSimple, которая параметром будет принимать число и проверять, простое оно или нет. Простое число - это число, которое не делится ни на одно другое число (кроме как на 1 и на само себя - на это делятся все числа). Если число простое - функция должна вернуть true, в противном случае false.

  function isSimple($num){
    for ($i=2; $i < $num ; $i++) { 
       if ($num % $i == 0){
        return false;
       }
        return true;
    } 

  }
echo isSimple(13); // выведет true


           //Задача: реализуйте функцию getDivisors, которая параметром будет принимать число и возвращать массив его делителей, то есть чисел, на которое делится наше число. К примеру, если мы передадим число 24 - мы должны получить массив [1, 2, 3, 4, 6, 12, 24].

function getDivisort($num){
$result = [];  
for ($i=1; $i <= $num; i++) { 
    if ($num % $i == 0){
      $result[] = $num;
    }
  }
   return $result;
}

echo get_digits(24);
                                      //Static переменные

  //Создадим простую функцию:
  function func()
  {
    /*
      Укажем PHP, что мы хотим, чтобы $a была статической переменной:
    */
    static $a;

    $a++;
    echo $a;
  }

  func(); //выведется 1
  func(); //выведется 2!
  func(); //выведется 3






                                             //Рекурсия
                //В программировании есть такое понятие, как рекурсия - это когда функция вызывает сама себя


$arr = [1, 2, 3, 4, 5];

  last($arr);

  function last($arr)
  {
    echo array_pop($arr).'<br>'; //выводим последний элемент массива
    
    if(!empty($arr)) {
      last($arr); //это рекурсия
    }
  }

                // Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.

function cut($str, $num = 10){
    return substr($str, 0, $num);
}

echo cut('abcdefghijKLMNJO');

                                        //Пример работы функции array_mup 

$array = [16,5,34,88,22,5];
 var_dump(array_map(function($elem){
  return $elem + 10;
 },$array));

                                       //Пример работы функции array_filter

 $array = [100,200,300,400,];           // если не передать callback функцию выведет только те значения которие имеют тип true
 var_dump(array_filter($array, function($element){
  return $element >= 300;
 }));
                                        // Пример работы функции array_walk

$array = [100,200,300,400];
    var_dump(array_walk($array, function($element){
  echo $element;
}));


                                       //Группировка массива


$array = [
[customer => one, itemno => yellow, price => 2],
[customer => one, itemno => blue, price => 5],
[customer => two, itemno => red, price => 4]
];

$new_array = [];
foreach ($array as $value) {
  $new_array[$value['customer']][] = array('itemno' => $value['itemno'], 'price' => $value['price']);
}




function debug($data) {
  echo '<pre>' . print_r($data, 1) . '</pre>';
}



$array = [
[склад => сухой, компания => АГРОТОРГ, комплектовщик => Пестряков,],
[склад => сухой, компания => СИРИУС, комплектовщик => Абдуллаев,],
[склад => ФРЕШ, компания => АГРОТОРГ, приемщик => Шумов,],
[склад => ФРОВ, компания => АГРОТОРГ, ВЭШ => Шлыков,] 
];

debug($array);

$group_array = [];
foreach ($array as $value) {
  $group_array[$value['компания']][] = array('склад' => $value['склад'], 'комплектовщик' => $value['комплектовщик']);
}

debug($group_array);


?>