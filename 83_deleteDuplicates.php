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
    function deleteDuplicates($head) {
        //逐步移动就好了;

        $start=$head->next;
        $end = $start->next;
        while ($end!=null) {
            while ($end!=null&&$start->val == $end->val) {
                $end=$end->next;
            }
            $start->next=$end;
            $start=$end;
            $end=$end->next??null;
        }
        return $head;
    }
}

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

$head = new ListNode(0);
$cur = $head;
$array =
    [ 1,1,1,2,3,3];
foreach ($array as $item) {
    $cur->next = new ListNode($item);
    $cur = $cur->next;
}


var_dump((new Solution())->deleteDuplicates($head));