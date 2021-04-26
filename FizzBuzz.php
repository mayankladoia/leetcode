<?php
/*
 * for all num for 1 to n check if num id div by 3 or 5 and print accordingly
 *
 */
$n = 8;
for ($i=1;$i<=$n;$i++) {
  if ((($i % 5) == 0) && (($i % 3) == 0)) {
    echo "FizzBuzz";
  }
  else {
    if ((($i % 5) != 0) && (($i % 3) == 0)) {
      echo "Fizz";
    }
    else {
      if ((($i % 5) == 0) && (($i % 3) != 0)) {
        echo "Buzz";
      }
      else {
        if ((($i % 5) != 0) && (($i % 3) != 0)) {
          echo $i;
        }
      }
    }
  }
}