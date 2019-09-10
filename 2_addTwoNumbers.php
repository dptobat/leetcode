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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        //定义一个标志位;
        $add = 0;
        $dummyHead=new ListNode(0);$curr=$dummyHead;
        while ($l1||$l2) {
            if (($remain = ($l1->val ?? 0) + ($l2->val ?? 0) - 10 + $add) >= 0) {
                $add = 1;
                $curr->next= new ListNode($remain);
            } else {
                $add =0;
                $curr->next=new ListNode($remain + 10) ;
            }
            $curr=$curr->next;
            $l1 = $l1->next??null;
            $l2 = $l2->next??null;
        }
        //如果有最后一位：
        $add>0&&$curr->next=new ListNode(1);
        return $dummyHead->next;
    }
}

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}
$l1=new ListNode(2);
$l1->next=new ListNode(1);
$l1->next->next=new ListNode(7);
$l2=new ListNode(5);
$l2->next=new ListNode(6);
$l2->next->next=new ListNode(3);
//$l2->next->next->next=new ListNode(4);
var_dump((new Solution())->addTwoNumbers($l1, $l2));