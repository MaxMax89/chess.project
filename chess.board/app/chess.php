<?php
$aplhapet = ["a","b","c","d","e","f","g","h"];
$numbers = ["8","7","6","5","4","3","2","1"];
$black_not_even = ["a7","c7","e7","g7","a5","c5","e5","g5","a3","c3","e3","g3","a1","c1","e1","g1"];
$black_even = ["b8","d8","f8","h8","b6","d6","f6","h6","b4","d4","f4","h4","b2","d2","f2","h2"];
$white_not_even = ["b7","d7","f7","h7","b5","d5","f5","h5","b3","d3","f3","h3","b1","d1","f1","h1"];
$white_even = ["a8","c8","e8","g8","a6","c6","e6","g6","a4","c4","e4","g4","a2","c2","e2","g2"];
$b = -1;
$c = -1;
$d= -1;
$h = -1;
$aplha = -1;
$nums = -1;
$b_numb = -1;
$count = 8;



$chess_board = "<table class=\"board\">";
    
    for ($row=0; $row <= $count; $row++) 
    { 
        
        $chess_board .= "<tr>";
        for ($col=0; $col <= $count; $col++) 
        { 
            
            if($row == $count)
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
                        $b ++;
                        $chess_board .= "<td class=\"black\">$black_not_even[$b]</td>";
                
                            
                        }
                
                     else{
                         $d++;
                        $chess_board .= "<td class=\"white\">$white_not_even[$d]</td>";
                    }
                }
                 elseif($row%2 == 0){
                     if($col%2 == 0){
                         $c++;
                         $chess_board .= "<td class=\"black\">$black_even[$c]</td>";
                    }
                     else{
                         $h++;
                         $chess_board .= "<td class=\"white\">$white_even[$h]</td>";
                    }
                }
            }
        }
        $chess_board .= "</tr>";
    }
$chess_board .= "</table>";

echo $chess_board;



?>


           
