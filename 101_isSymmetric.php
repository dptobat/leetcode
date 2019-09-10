<?php


class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        //一个使用前序遍历，一个使用后序遍历;
        return $this->isMirror($root->left,$root->right);
    }

    function isMirror($p,$q){
        if($p==null&&$q==null)return true;
        if(!$p||!$q)return false;
        if($p->val!=$q->val)return false;
        return $this->isMirror($p->right,$q->left)&&$this->isMirror($p->left,$q->right);
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