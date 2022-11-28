<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>max</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <div class="main_conteiner">
      <div class="main_wrapper">
          <?php
            $chess_board = "<table class=board>";
            for($row = 1; $row < 9; $row ++) 
            {
                $chess_board .= "<tr>";
                  for($col = 1; $col < 9; $col ++)
                      {
                    if ($row%2 != 0){
                        if ($col%2 != 0){
                             $chess_board .="<td class=black></td>";
                          } else {
                          $chess_board .="<td class=white></td>";
                          }
                      }
                    elseif ($row%2 == 0){
                        if ($col%2 == 0){
                             $chess_board .="<td class=black></td>";
                         } else {
                          $chess_board .="<td  class=white></td>";
                         }
                     }   
                 }
               $chess_board .= "</tr>";  
            
            }
            $chess_board .="</table>";

             echo $chess_board;
     ?>
        </div><!--main_wrapper-->
      </div><!--main_conteiner-->   
        
      
    

  </body>
</html>