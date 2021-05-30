<?php
  $fn = fopen("myfile.txt","r");
  while (! feof($fn)) {
    $result = fgets($fn,  2);
    echo $result;
  }
  fclose($fn);
?>