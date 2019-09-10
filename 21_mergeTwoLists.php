<?php


class Solution {
    function mergeTwoLists($l1, $l2) {
//        while($l1->next!=null&&$l2->next)
        $head=new ListNode(0);
        $cur=$head;
        while($l1&&$l2){
            $cur->next=new ListNode(0);
            $cur=$cur->next;
            if($l1->val<=$l2->val){
                $cur->val=$l1->val;
                $l1=$l1->next;
            }else{
                $cur->val=$l2->val;
                $l2=$l2->next;
            }
        }
        //判断那个链表不为空;
        if($l1!=null){
            $cur->next=$l1;
        }elseif($l2!=null){
            $cur->next=$l2;
        }
        return $head->next;
    }
}

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

$l1=new ListNode(0);
$cur=$l1;
$array=[1,2,4];
foreach ($array as $item) {
    $cur->next=new ListNode($item);
    $cur=$cur->next;
}

$l2=new ListNode(0);
$cur=$l2;
$array=[1,3,4];
foreach ($array as $item) {
    $cur->next=new ListNode($item);
    $cur=$cur->next;
}


var_dump((new Solution())->mergeTwoLists($l1,$l2));
