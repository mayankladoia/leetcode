<?php
//node structure
class Node {
  public $data;
  public $next;
  public $prev;
}
class LinkedList {
  public $head;
  public $tail;
  //constructor to create an empty LinkedList
  public function __construct(){
    $this->head = null;
    $this->tail = null;
  }
  
  //display the content of the list
  public function PrintList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      echo "The list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
      echo "\n";
    } else {
      echo "The list is empty.\n";
    }
  }
  
  //display the content of the list in Reverse
  public function ReversePrintList() {
    $temp = new Node();
    $temp = $this->tail;
    if($temp != null) {
      echo "The Reverse list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->prev;
      }
      echo "\n";
    } else {
      echo "The list is empty.\n";
    }
  }
};

// test the code
//create an empty LinkedList
$MyList = new LinkedList();

//Add first node.
$first = new Node();
$first->data = 10;
$first->next = null;
//linking with head node
$MyList->head = $first;
$MyList->tail=$first;
$first->prev = null;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;
$second->prev = $first;
$MyList->tail=$second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node
$second->next = $third;
$third->prev = $second;
$MyList->tail=$third;

//print the content of list
$MyList->PrintList();
echo "<br />";
//print the content of list in reverse
$MyList->ReversePrintList();