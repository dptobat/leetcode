<?php



class Solution {

    /**
     * @param ListNode $head
     * @param Integer $pos
     * @return Boolean
     */
    function hasCycle($head, $pos) {
        if($pos<0)return false;
        //只需要计数就好了吧;
        $count=0;
        while($head){
            $count++;
            $head=$head->next;
        }
        return $count>$pos-1;
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
$pos=1;
var_dump((new Solution())->hasCycle($head,$pos));