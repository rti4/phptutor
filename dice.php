<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/9/17
 * Time: 9:04 AM
 */

$rollcount=0;
$roll = rand(1,6);

do {
  print $roll;
  $roll=rand(1,6);
  $rollcount++;
  print $roll;
  print $rollcount;
  print '<hr/>';
  if ($roll == 6) {
    echo "You rolled a 6! <br>";
    break;
  } else {
    echo "Better luck next time <br>";
  }

} while ($roll == 6);
print $roll;
echo "You win! It took $rollcount rolls.";