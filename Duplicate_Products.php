<?php
/*
 * find number of duplicates in combination $name[$i], $price[$i], $weight[$i]
 */
$name = ['b', 'b', 'b', 'b'];
$price = [2,2,2,2];
$weight = [2,2,2,2];
$duplicate = [];
for ($i=0; $i<count($name); $i++) {
  $duplicate[$i] = 0;
  for ($j=$i+1; $j<count($name); $j++) {
    if(($name[$i] == $name[$j]) && ($price[$i] == $price[$j]) && ($weight[$i] == $weight[$j])) {
      $duplicate[$i] = 1;
      break;
    }
  }
}
$count = 0;
for($i=0; $i<count($duplicate); $i++) {
  if($duplicate[$i] == 1){
    $count++;
  }
}
echo $count;