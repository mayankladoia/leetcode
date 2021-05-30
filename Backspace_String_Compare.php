<?php

/*
 *Given two strings s and t, return true if they are equal when both are typed into empty text editors. '#' means a backspace character.

Note that after backspacing an empty text, the text will continue empty.



Example 1:

Input: s = "ab#c", t = "ad#c"
Output: true
Explanation: Both s and t become "ac".
Example 2:

Input: s = "ab##", t = "c#d#"
Output: true
Explanation: Both s and t become "".
Example 3:

Input: s = "a##c", t = "#a#c"
Output: true
Explanation: Both s and t become "c".
Example 4:

Input: s = "a#c", t = "b"
Output: false
Explanation: s becomes "c" while t becomes "b".


Constraints:

1 <= s.length, t.length <= 200
s and t only contain lowercase letters and '#' characters.
 */
 
$s = "ab#c";
$t = "ad#c";
//$s = "ab##";
//$t = "c#d#";

$s_final = [];
$s_count = 0;
$t_final = [];
$t_count = 0;
for($i=0;$i<strlen($s);$i++){
  if($s[$i] != '#') {
    array_push($s_final, $s[$i]);
  } else {
    array_pop($s_final);
  }
}
for($i=0;$i<strlen($t);$i++) {
  if ($t[$i] != '#') {
    array_push($t_final, $t[$i]);
  }
  else {
    array_pop($t_final);
  }
}
if($s_final == $t_final) {
  echo TRUE;
} else {
  echo FALSE;
}