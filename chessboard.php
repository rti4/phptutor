<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/4/17
 * Time: 1:54 PM
 */

$i = 0;
$j =0;
$header_str = "Header";
print '<table>';
print '<tr>';


while ($i < 8) {
  print '<tr>';
  while ($j < 8) {
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
    $j++;
  }
  print '</tr>';
  $i++;
  $j=0;
}

print '</table>';

print '<br><br>';

print '<table>';
for ($i = 0; $i < 8; $i++) {
  print '<tr>';
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
  print '</tr>';
}
print '</table>';
?>