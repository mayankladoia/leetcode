<?php
/*
 * Decode encoded string in three steps
 * reverse $encoded
 * convert all ascii to chars
 * print the string
 */
$encoded = "71141148";
$encoded = strrev($encoded);
$string = "";
//echo $encoded;
$char_asci = "0";
$A = 65;
$Z = 90;
$a = 97;
$z = 122;
$space = 32;
for ($i=0; $i<strlen($encoded); $i++) {
  if( ((int)$char_asci>=$a) && ((int)$char_asci<=$z)) {
    $string .= chr((int)$char_asci);
    $char_asci = $encoded[$i];
  } else if( ((int)$char_asci>=$A) && ((int)$char_asci<=$Z)) {
    $string .= chr((int)$char_asci);
    $char_asci = $encoded[$i];
  } else if((int)$char_asci==$space) {
    $string .= chr((int)$char_asci);
    $char_asci = $encoded[$i];
  } else {
    $char_asci .= $encoded[$i];
  }
}
$string .= chr((int)$char_asci);
echo $string;