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
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
        //判断当前的值是大于根节点还是小于根节点;
        if($root==null||$root->val==$val)return $root;
        return $root->val>$val?$this->searchBST($root->left,$val):$this->searchBST($root->right,$val);
    }
}