<meta  charset = 'UTF-8'/>
<?php
$employeesList = [
    [
     "name" => "Иван Степанович",
     "department" => "Бухгалтерия",
     "count_of_people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         " solary_per_month" => 55000
        ]
    ],
    [
     "name" => "Светлана Юрьевна",
     "department" => "Юридический 1",
     "count_of_people" => 30,
     "note" =>
        [
         "position" => "Юрист",
         " solary_per_month" => 50000
        ]
    ],
    [
     "name" => "Борис Борисович",
     "department" => "Юридический 2",
     "count_of_people" => 30,
     "note" =>
        [
         "position" => "Юрист",
         " solary_per_month" => 45000
        ]
    ],
    [
     "name" => "Леонид Иванович",
     "department" => "Бухгалтерия",
     "count_of_people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         " solary_per_month" => 40000
        ]
    ],
];


function my_sort ($key) {
   return function($a, $b) use ($key) {
   return $a[$key] <=> $b[$key];
  };
}
  usort($employeesList, my_sort("note"]["solary_per_month"));

  debug($employeesList);


function debug($data){
   echo '<pre>';
   print_r($data);
   echo '</pre>';
}

?>