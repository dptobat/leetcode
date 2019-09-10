<?php


class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    public $data = [];

    function levelOrderBottom($root) {
        //怎么进行层序遍历;
        if(!$root)return [];
        $queue = new SplQueue();
        //将根加入队列中;
        $queue->enqueue($root);
        $res = [];

        while (!$queue->isEmpty()) {
            $tmp=[];
            $i=$queue->count();
            while($i--) {
                $node = $queue->bottom();
                $queue->dequeue();
                $tmp[]=$node->val;
            if ($node->left) {
                $queue->enqueue($node->left);
            }
            if ($node->right) {
                $queue->enqueue($node->right);
            }
            }
            $res[]=$tmp;
        }
        return array_reverse($res);
    }

    public function CreateBT(&$root = null)      //创建二叉树
    {
        $elem = array_shift($this->data);
        if ($elem == null) {
            return $root;
        } else if ($elem == '#') {
            $root = null;
        } else {
            $root = new TreeNode($elem);
            $root->left = $this->CreateBT();
            $root->right = $this->CreateBT();
        }
        return $root;
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


$obj = new Solution();
$obj->data = [];
$root = $obj->CreateBT();
var_dump($obj->levelOrderBottom($root));

