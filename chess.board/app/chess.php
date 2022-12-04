<?php
$aplhapet = ["a","b","c","d","e","f","g","h"];
$numbers = range(1 , 100);
$count_fields =0;

$count_fields += count($aplhapet);



$chess_board = "<table class=\"board\">";
    
    for ($row=0; $row <= $count_fields; $row++) 
    { 
        $chess_board .= "<tr>";
        
        if($row != $count_fields){
            $chess_board .= "<td class=\"coordinates\">$numbers[$row]</td>";
        }
        else{
            $chess_board .= "<td class=\"coordinates\"></td>";
        }
            for ($col=0; $col < $count_fields; $col++) 
            { 
                if($row == $count_fields){
                    $chess_board .= "<td class=\"coordinates\">$aplhapet[$col]</td>";
                }
                
                if($row%2 != 0 and $row < $count_fields){
                if($col%2 != 0 ){
                    $chess_board .= "<td class=\"black\">$aplhapet[$col]$numbers[$row]</td>";
                }
                else{
                     $chess_board .= "<td class=\"white\">$aplhapet[$col]$numbers[$row]</td>";
                }
                }
             elseif($row%2 == 0 and $row < $count_fields){
                 if($col%2 == 0){
                    $chess_board .= "<td class=\"black\">$aplhapet[$col]$numbers[$row]</td>";
                }
                else{
                    $chess_board .= "<td class=\"white\">$aplhapet[$col]$numbers[$row]</td>";
                    }
                }
                   
        }
    }
    
     
$chess_board .= "</table>";


echo $chess_board;


?>


           
