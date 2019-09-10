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
     * @return Integer
     */
    protected $max=0;
    function maxDepth($root) {
        if($root==null)return 0;
        $max=0;
        foreach ($root->children as $child){
          $max=max($this->max,$this->maxDepth($child));
        }
        return $max+1;
    }
}
