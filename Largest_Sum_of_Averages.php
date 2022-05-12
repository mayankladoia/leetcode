<?php

/*
 * We partition a row of numbers A into at most K adjacent (non-empty) groups, then our score is the sum of the average of each group. What is the largest score we can achieve?

Note that our partition must use every number in A, and that scores are not necessarily integers.

Example:
Input:
A = [9,1,2,3,9]
K = 3
Output: 20
Explanation:
The best choice is to partition A into [9], [1, 2, 3], [9]. The answer is 9 + (1 + 2 + 3) / 3 + 9 = 20.
We could have also partitioned A into [9, 1], [2], [3, 9], for example.
That partition would lead to a score of 5 + 2 + 6 = 13, which is worse.
 */
//$A = [9,1,2,3,9];
//$K = 3;

$A = [4,1,7,5,6,2,3];
$K = 4;

rsort($A);
$largest_score = 0;
for($i=0;$i<$K-1;$i++) {
  $largest_score += $A[$i];
}
$count = 0;
$temp_sum = 0;
for($i=$K-1;$i<count($A);$i++) {
  $count++;
  $temp_sum += $A[$i];
}
$largest_score = $largest_score+($temp_sum/$count);
echo $largest_score;