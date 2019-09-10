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
//给定二叉搜索树的根结点 root，返回 L 和 R（含）之间的所有结点的值的和。
//
//二叉搜索树保证具有唯一的值。
//
// 
//
//示例 1：
//
//输入：root = [10,5,15,3,7,null,18], L = 7, R = 15
//输出：32
//示例 2：
//
//输入：root = [10,5,15,3,7,13,18,1,null,6], L = 6, R = 10
//输出：23

class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $L
     * @param Integer $R
     * @return Integer
     */

    function rangeSumBST($root, $L, $R) {
        //中序遍历整棵树;
        if(!isset($root->val))return 0;
        if($root->val<$L){
            return    $this->rangeSumBST($root->right,$L,$R);
        }elseif($root->val>$R){
            return   $this->rangeSumBST($root->left,$L,$R);
        }else{
            return $root->val+$this->rangeSumBST($root->left,$L,$R)+$this->rangeSumBST($root->right,$L,$R);
        }
    }
}
