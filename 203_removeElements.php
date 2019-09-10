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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $dummyHead=new ListNode(0);
        $dummyHead->next=$head;
        $cur=$dummyHead;
        while($cur->next!=null){
            if($cur->next->val==$val){
                $cur->next=$cur->next->next;
            }else{
                $cur=$cur->next;
            }
        }
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
$head = new ListNode(1);
$cur = $head;
$array =
    [1];
foreach ($array as $item) {
    $cur->next = new ListNode($item);
    $cur = $cur->next;
}
$val=1;
var_dump((new Solution())->removeElements($head,$val));