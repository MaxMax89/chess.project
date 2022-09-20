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


$employeesPositionList = [];
    foreach ($employeesList as  $value) 
    {
        $employeesPositionList[$value["note"]["position"]][] = [
            "name" => $value["name"],
            "department" => $value["department"], 
            "count_of_people" => $value["count_of_people"],
            "note" => 
                [
                  "solary_per_month" => $value["note"]["solary_per_month"]
                ]
        ];
  
    }

?>