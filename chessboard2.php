<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/4/17
 * Time: 1:54 PM
 */


function create_chessboard($i) {

  for ($j = 0; $j < 8; $j++) {
    if ($i % 2 === 0) {
      if ($j % 2 === 0) {
        print '<td style="background-color: pink; width: 20px; height: 20px;"></td>';
      } else {
        print '<td style="background-color: black; width: 20px; height: 20px;"></td>';
      }
    } else {
      if ($j % 2 === 0) {
        print '<td style="background-color: black; width: 20px; height: 20px;"></td>';
      } else {
        print '<td style="background-color: pink; width: 20px; height: 20px;"></td>';
      }
    }
  }
}

#driver code exist here#######
$alpha_array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$alpha_str = 'ABCDEFGH';
$header_str = "Header";

print '<table>';
for ($i = 0; $i < 9; $i++) {

    if ($i == 0){
        # print letter system
    }else{
        print '<tr>';
        # creates the chessboard
        create_chessboard($i);
        print '</tr>';
    }
}
print '</table>';
?>