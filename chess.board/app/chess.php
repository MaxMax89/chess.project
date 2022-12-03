<?php
$aplhapet = [false,"a","b","c","d","e","f","g","h"];
$numbers = ["8","7","6","5","4","3","2","1"];




$chess_board = "<table class=\"board\">";
    
    for ($row=0; $row <= 8; $row++) 
    { 
        $chess_board .= "<tr>";
        for ($col=0; $col <= 8; $col++) 
        { 
            if($row == 8)
            {
                if($col == 0){
                    $chess_board .= "<td class=\"coordinates\"></td>";
                }
                else{
                    $chess_board .= "<td class=\"coordinates\">$aplhapet[$col]$numbers[$row]</td>";
                }
            }
            else{
                if(($row >= 0 and $row < 8) and ($col == 0)){
                   $chess_board .= "<td class=\"coordinates\">$numbers[$row]</td>";
                }
                elseif($row%2 != 0){
                    if($col%2 != 0){
                        $chess_board .= "<td class=\"black\">$aplhapet[$col]$numbers[$row]</td>";
                    }
                    else{
                         $chess_board .= "<td class=\"white\">$aplhapet[$col]$numbers[$row]</td>";
                    }
                }
                 elseif($row%2 == 0){
                     if($col%2 == 0){
                         $chess_board .= "<td class=\"black\">$aplhapet[$col]$numbers[$row]</td>";
                    }
                     else{
                         $chess_board .= "<td class=\"white\">$aplhapet[$col]$numbers[$row]</td>";
                    }
                }
            }
        }
        $chess_board .= "</tr>";
    }
$chess_board .= "</table>";

echo $chess_board;


?>


           
