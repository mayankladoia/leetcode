<?php
/*Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.

Notice that the solution set must not contain duplicate triplets.



Example 1:

Input: nums = [-1,0,1,2,-1,-4]
Output: [[-1,-1,2],[-1,0,1]]
Example 2:

Input: nums = []
Output: []
Example 3:

Input: nums = [0]
Output: []


Constraints:

0 <= nums.length <= 3000
-105 <= nums[i] <= 105*/

/**
     * @param Integer[] $nums
     * @return Integer[][]
     */
     $nums = array (-1,0,1,2,-1,-4);
        $result =array();
        for($i=0;$i<count($nums)-1;$i++) {
            $p1 = $i+1;
            $p2 = $i+2;
            while ($p2<count($nums))
            {
                if(($nums[$i] + $nums[$p1] + $nums[$p2]) == 0) {
                    array_push($result, array($nums[$i], $nums[$p1], $nums[$p2]));
                }
                $p2++;
            }
        }
        print_r(json_encode($result));
        print_r("\n\n");

?>