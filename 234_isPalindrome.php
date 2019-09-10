<?php

class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        //将链表翻转；需要知道链表的长度;
        $cur=$head;
        $count=0;
        while($cur){
            $count++;
            $cur=$cur->next;
        }
        $reverse_count=0;
        $cur=$head;
        $prev=null;
        while($cur&&$reverse_count<($count>>1)){
            $reverse_count++;
            $temp=$cur->next;
            $cur->next=$prev;
            $prev=$cur;
            $cur=$temp;
        }
        //检查新的链表是不是等于翻转的链表;
        if($count%2!=0)$cur=$cur->next;
        while($prev&&$cur){
            if($prev->val!=$cur->val){
                return false;
            }
            $prev=$prev->next;
            $cur=$cur->next;
        }
        return true;
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
    [2,2,1];
foreach ($array as $item) {
    $cur->next = new ListNode($item);
    $cur = $cur->next;
}
var_dump((new Solution())->isPalindrome($head));