<?php
/**
 * Created by PhpStorm.
 * User: ashleygilleland
 * Date: 4/9/17
 * Time: 9:04 AM
 */

$rollcount=0;

do {
  $roll=rand(1,6);
  $rollcount++;
  if ($roll == 6) {
    echo "You rolled a 6! <br>";
  } else {
    echo "Better luck next time <br>";
  }
} while ($roll == 6);

echo "You win! It took $rollcount rolls.";