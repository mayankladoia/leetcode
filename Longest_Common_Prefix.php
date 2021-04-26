<?php
/*Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".



Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.


Constraints:

0 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lower-case English letters.*/

$strs = ["flower","flow","flight"];

$result = "";
$len = 201;
$shortest="";
foreach ($strs as $str){
 if($len>strlen($str)) {
  $len = strlen($str);
  $shortest = $str;
 }
}
if($shortest == "") {
  return $result;
}
$strs = array_diff($strs, [$shortest]);
for ($i=0;$i<$len;$i++) {
  $match = 1;
 foreach ($strs as $str) {
  if(substr($shortest, $i, 1) != substr($str,$i,1)) {
    $match = 0;
  }
 }
 if($match == 1) {
    $result .= substr($shortest, $i, 1);
 } else {
    echo  $result;
    return;
 }
}