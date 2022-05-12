<?php
/*
Create a function that takes an array of numbers and return "Boom!" if the number 7 appears in the array. Otherwise, return "there is no 7 in the array".
*/
$num= [6, 55, 60, 28, 86];
$temp = 0;
for($i=0;$i<count($num);$i++) {
 $str = (string) $num[$i];
 if(strpos($str, "7") !== FALSE) {
  $temp = 1;
  break;
 }
}
if($temp == 1)
{
 echo "Boom!";
} else {
  echo "there is no 7 in the array";
}