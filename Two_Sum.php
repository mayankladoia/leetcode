<?php
/*Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.



Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Output: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]*/


$nums = [2,7,11,15];
$target = 9;
$hash_map = array();
$result = array();
for ($i=0; $i<count($nums); $i++){
    $hash_map[$nums[$i]] = $nums[$i];
}
for ($i=0; $i<count($nums); $i++){
    $result[0]=$i;
    if(isset($hash_map[$target - $nums[$i]])) {
       $temp =  array_search($hash_map[$target - $nums[$i]], $nums);
        if($temp != $i) {
            $result[1] = $temp;
            echo implode(",",$result);
            return;
        }
    }
}
echo implode(",",$result);