<?php
/*Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.


Example 1:

Input: s = "()"
Output: true
Example 2:

Input: s = "()[]{}"
Output: true
Example 3:

Input: s = "(]"
Output: false
Example 4:

Input: s = "([)]"
Output: false
Example 5:

Input: s = "{[]}"
Output: true*/


$str = "(){([])}()";
$arr = str_split($str);
$res = array();
for ($i=0; $i<count($arr); $i++) {
  if($arr[$i] == "(" || $arr[$i] == "{" || $arr[$i] == "[") {
    array_push($res, $arr[$i]);
  } else {
    if(count($res) == 0) {
      echo  "FASLE";
      return;
    }
    if($arr[$i] == ")") {
      if(array_pop($res) != "(") {
        echo  "FASLE";
        return;
      }
    }
    if($arr[$i] == "}") {
      if(array_pop($res) != "{") {
        echo  "FASLE";
        return;
      }
    }
    if($arr[$i] == "]") {
      if(array_pop($res) != "[") {
        echo  "FASLE";
        return;
      }
    }
  }
}
if(count($res) == 0) {
  echo "TRUE";
} else {
  echo  "FASLE";
}
?>