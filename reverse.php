<?php
/*Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.

Assume the environment does not allow you to store 64-bit integers (signed or unsigned).



Example 1:

Input: x = 123
Output: 321
Example 2:

Input: x = -123
Output: -321
Example 3:

Input: x = 120
Output: 21
Example 4:

Input: x = 0
Output: 0


Constraints:

-231 <= x <= 231 - 1*/


$num=123;
if($num<pow(-2, 29) || $num>pow(2, 29)-1) {
    return 0;
}
$neg = 0;
if($num<0) {
    $neg = 1;
}
$str =str_split(strval($num));
for ($i=count($str)-1; $i>=0; $i--) {
    $str_rev[count($str)-$i] = $str[$i];
}
if($neg == 0) {
    echo intval(implode("", $str_rev));
} else {
    echo intval(implode("", $str_rev))*-1;
}
?>