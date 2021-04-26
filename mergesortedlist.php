<?php
/*Merge two sorted linked lists and return it as a sorted list. The list should be made by splicing together the nodes of the first two lists.



Example 1:


Input: l1 = [1,2,4], l2 = [1,3,4]
Output: [1,1,2,3,4,4]
Example 2:

Input: l1 = [], l2 = []
Output: []
Example 3:

Input: l1 = [], l2 = [0]
Output: [0]


Constraints:

The number of nodes in both lists is in the range [0, 50].
-100 <= Node.val <= 100
Both l1 and l2 are sorted in non-decreasing order.*/


$l1 = [1,2,4];
$l2 = [1,3,4];
$i=0;
$j=0;
$res = array();
while($i<count($l1) && $j<count($l2)) {
  if($l1[$i] < $l2[$j]) {
    array_push($res, $l1[$i]);
    $i++;
  } else {
    array_push($res, $l2[$j]);
    $j++;
  }
}
while($i<count($l1)) {
  array_push($res, $l1[$i]);
  $i++;
}
while($j<count($l2)) {
  array_push($res, $l2[$j]);
  $j++;
}
echo implode(', ',$res);


//Definition for a singly-linked list.
class ListNode {
  public $val = 0;
  public $next = null;
  function __construct($val = 0, $next = null) {
    $this->val = $val;
    $this->next = $next;
  }
}

class Solution {
  
  /**
   * @param ListNode $l1
   * @param ListNode $l2
   *
   * @return ListNode
   */
  function mergeTwoLists($l1, $l2) {
  
  }
  
}

$l1 = new ListNode();
$l2 = new ListNode();
$l1->val = 1;
$l1->next = new ListNode();
$l1->val = 2;
$l1->next = new ListNode();
$l1->val = 4;
$l1->next = new ListNode();



?>