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
         "solary" => 45000
        ]
    ],
    [
     "name" => "Леонид Иванович",
     "department" => "Бухгалтерия",
     "people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         "solary" => 40000
        ]
    ],
];     
//--------------------sort for solary--------------




$employeesListgroup = [];
  foreach ($employeesList as $key => $value) {
    $employeesListgroup[$value["department"]]["workers"][] = $value;  
      }





?>