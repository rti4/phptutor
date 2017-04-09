<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/4/17
 * Time: 1:54 PM
 */


function create_chessboard($i) {

  print "<td>$i</td>";
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
  print "<td>$i</td>";
}

function create_alpharow ($alpha_array) {
  print '<td>' . ' ' . '</td>';
  for ($i=0; $i < count($alpha_array); $i++) {
    print '<td>' . $alpha_array[$i] . '</td>';
  }

}

#driver code exist here#######
$alpha_array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$alpha_str = 'ABCDEFGH';
$header_str = "Header";

print '<table>';
# print letter system
print '<tr>';
  create_alpharow($alpha_array);
print '</tr>';
  for ($i = 0; $i < 8; $i++) {
      print '<tr>';
      # creates the chessboard
      create_chessboard($i);
      print '</tr>';
  }
print '<tr>';
  create_alpharow($alpha_array);
print '</tr>';
print '</table>';
?>