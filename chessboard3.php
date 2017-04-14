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


function create_alpharow ($alpha_str) {
    $length = strlen($alpha_str);
  print '<td>' . ' ' . '</td>';
    for ($i = 0; $i < $length; $i++) {
        print '<td>' . substr($alpha_str, $i, 1) . '</td>';
  }

}

#driver code exist here#######
$alpha_array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
$alpha_str = 'ABCDEFGH';
$header_str = "Header";
$length = strlen($alpha_str);

print '<table>';
# print letter system
print '<tr>';
  create_alpharow($alpha_str);
print '</tr>';
  for ($i = 0; $i < 8; $i++) {
      print '<tr>';
      # creates the chessboard
      create_chessboard($i);
      print '</tr>';
  }
print '<tr>';
  create_alpharow($alpha_str);
print '</tr>';
print '</table>';

?>