<?php


/*
// Definition for a Node.
class Node {
    public $val;
    public $children;

    @param Integer $val
    @param list<Node> $children
    function __construct($val, $children) {
        $this->val = $val;
        $this->children = $children;
    }
}
*/
class Solution {

    /**
     * @param Node $root
     * @return Integer[]
     */
    protected $root_array=[];
    function preorder($root) {
//        if($root==null)return [];
//        foreach ($root->children as $child){
//            $this->postorder($child);
//        }
////        $this->root_array[]=$root->val;
////        return $this->root_array;
        while(true){
            $this->root_array[]=$root->val;

        }
    }
}