<meta  charset = 'UTF-8'/>
<?php
$workers = [
    [
     "name" => "Иван Степанович",
     "department" => "Бухгалтерия",
     "people" => 30,
     "note" =>
        [
         "position" => "Бухгалтер",
         "position_code" => "bug",
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
         "position_code" => "ur",
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
         "position_code" => "ur",
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
         "position_code" => "bug",
         "solary" => 45000
        ]
    ],
];     
//--------------------sort for solary-------------------
function my_sort($a, $b) {
   return $a["note"]["solary"] <=> $b["note"]["solary"];
  }
 uasort($workers, my_sort); 

//-------------------group for position-----------------  
$workersgroup = [];
foreach ($workers as $key => $value) {
    $workersgroup[$value["note"]["position_code"]][] = $value;
}

//-------------------sort for solary in group-----------






debug($workersgroup);


function debug($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
};

?>