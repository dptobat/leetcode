<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if($p->val===$q->val&&$p->left==null&&$p->right==null&&$q->right==null&&$q->left==null){
            return true;
        }
        if($this->isSameTree($p->left,$q->left)&&$this->isSameTree($p->right,$q->right)&&$p->val===$q->val){
            return true;
        }
        return false;
    }
}


class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($value) {
        $this->val = $value;
    }
}
