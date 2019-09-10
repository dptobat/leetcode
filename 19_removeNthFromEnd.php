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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        //设置两个指针;
        $dummy=new ListNode(0);
        $dummy->next=$head;
        $l_index=$dummy;
        $l_end=$dummy;
        $i=0;
        while($l_end){
            $l_end=$l_end->next;
            if($i>$n){
                $l_index=$l_index->next;
            }
            $i++;
        }
        $l_index->next=($l_index->next)->next??null;
        return $dummy->next;
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
$curr=$head;
$array=[1];
foreach ($array as $item) {
    $curr->next=new ListNode($item);
    $curr=$curr->next;
}
$n=2;
var_dump((new Solution())->removeNthFromEnd($head->next,$n));