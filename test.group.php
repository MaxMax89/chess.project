<meta  charset = 'UTF-8'/>
<?php
$employeesList = [
    [
     "name" => "Иван Степанович",
     "department" => "Бухгалтерия",
     "people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         "solary" => 55000
        ]
    ],
    [
     "name" => "Светлана Юрьевна",
     "department" => "Юридический 1",
     "people" => 30,
     "note" =>
        [
         "position" => "Юрист",
         "solary" => 50000
        ]
    ],
    [
     "name" => "Борис Борисович",
     "department" => "Юридический 2",
     "people" => 30,
     "note" =>
        [
         "position" => "Юрист",
         "solary" => 40000
        ]
    ],
    [
     "name" => "Леонид Иванович",
     "department" => "Бухгалтерия",
     "people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         "solary" => 45000
        ]
    ],
];     
//--------------------sort for solary-------------------
function my_sort($a, $b) {
   return $a["note"]["solary"] <=> $b["note"]["solary"];
  }
 uasort($employeesList, my_sort); 
  





debug($employeesList);


function debug($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
};

?>