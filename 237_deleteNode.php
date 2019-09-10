<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteNode($head) {

    }
}


class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

$head=new ListNode(0);
$cur=$head;
$array=[1,2,3,4,5];
foreach ($array as $item) {
    $cur->next=new ListNode($item);
    $cur=$cur->next;
}

var_dump($head);exit;