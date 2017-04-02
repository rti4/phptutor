<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/2/17
 * Time: 12:34 PM
 */

echo 'Hello, World!';

$i =0;
while ($i < 10){
  $i++;
}

$i = 0;
$j =0;
$header_str = "Header";
print '<table>';
print '<tr>';

while ($i < 5){
  print '<td>'.$i.'</td>';
  $i++;
}
print '</tr>';
print '</table>';

?>