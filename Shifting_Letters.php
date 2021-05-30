<?php
/*
 * We have a string s of lowercase letters, and an integer array shifts.

Call the shift of a letter, the next letter in the alphabet, (wrapping around so that 'z' becomes 'a').

For example, shift('a') = 'b', shift('t') = 'u', and shift('z') = 'a'.

Now for each shifts[i] = x, we want to shift the first i+1 letters of S, x times.

Return the final string after all such shifts to s are applied.

Example 1:

Input: s = "abc", shifts = [3,5,9]
Output: "rpl"
Explanation:
We start with "abc".
After shifting the first 1 letters of S by 3, we have "dbc".
After shifting the first 2 letters of S by 5, we have "igc".
After shifting the first 3 letters of S by 9, we have "rpl", the answer.
Note:

1 <= s.length = shifts.length <= 20000
0 <= shifts[i] <= 109
ascii of a is 97
ascii of z is 122
 */
$s = "abc";
$shifts = [3,5,9];
//$s = "z";
//$shifts = [52];

$sum = 0;
for($i=count($shifts)-1;$i>=0;$i--) {
  $sum += $shifts[$i];
  $increment = $sum % 26;
  $temp = ord($s[$i]) + $increment;
  while($temp > 122) {
    $temp = $temp - 122 + 96;
  }
  $s[$i] = chr($temp);
}
echo $s;