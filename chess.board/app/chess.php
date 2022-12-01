<?php
$aplhapet = ["a","b","c","d","e","f","g","h"];
$numbers = ["8","7","6","5","4","3","2","1"];
$aplha = -1;
$nums = -1;
$chess_board = "<table class=\"board\">";
    
    for ($row=0; $row < 9; $row++) { 
        
        $chess_board .= "<tr>";
        for ($col=0; $col < 9; $col++) { 
            
            if($row == 8)
            {
                if($col == 0)
                {
                    $chess_board .= "<td class=\"coordinates\"></td>";
                }
                else{
                    $aplha ++;
                    $chess_board .= "<td class=\"coordinates\">$aplhapet[$aplha]</td>";
                }
            }
            else{
                if(($row >= 0 and $row < 8) and ($col == 0)){
                    $nums ++;
                    $chess_board .= "<td class=\"coordinates\">$numbers[$nums]</td>";
                }
                elseif($row%2 != 0){
                    if($col%2 != 0){
                        $chess_board .= "<td class=\"black\"></td>";
                    }
                     else{
                        $chess_board .= "<td class=\"white\"></td>";
                    }
                }
                 elseif($row%2 == 0){
                     if($col%2 == 0){
                         $chess_board .= "<td class=\"black\"></td>";
                    }
                     else{
                         $chess_board .= "<td class=\"white\"></td>";
                    }
                }
            }
        }
        $chess_board .= "</tr>";
    }
$chess_board .= "</table>";

echo $chess_board;






           
