<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/4/17
 * Time: 1:54 PM
 */


$alpha_array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$alpha_str = 'ABCDEFGH';
$header_str = "Header";

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



print '<table>';
for ($i = 0; $i < 8; $i++) {
  print '<tr>';
    create_chessboard($i);
  print '</tr>';
}
print '</table>';
?>