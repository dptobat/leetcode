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
    function reverseList($head) {
        $prev=null;
        $cur=$head;
        while($cur){
            $temp=$cur->next;
            $cur->next= $prev;
            $prev=$cur;
            $cur=$temp;
        }
        return $prev;
    }
}


class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

$head = new ListNode(1);
$cur = $head;
$array = [2,3,4,5];
foreach ($array as $item) {
    $cur->next = new ListNode($item);
    $cur = $cur->next;
}





var_dump((new Solution())->reverseList($head));