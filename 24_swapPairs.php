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
    function swapPairs($head) {
        $pre=new ListNode(0);
        
    }
}

$head=new ListNode(0);
$curr=$head;
$array=[1,2,3,4];
foreach ($array as $item) {
    $curr->next=new ListNode($item);
    $curr=$curr->next;
}
var_dump((new Solution())->swapPairs($head));


class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}