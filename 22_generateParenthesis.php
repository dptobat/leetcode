<?php


class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        //递归;
        $res = [];
        $this->createParenthesis($n, 0, 0, $res, '');
        return $res;
    }

    function createParenthesis($n, $count1, $count2, &$res, $path) {
        if ($count1 > $n || $count2 > $n) return;
        if ($count1 == $n && $count2 == $n) $res[] = $path;
        if($count2<=$count1){
            $this->createParenthesis($n,$count1+1,$count2,$res,$path.'(');
            $this->createParenthesis($n,$count1,$count2+1,$res,$path.')');
        }
    }
}

$n = 3;
var_dump((new Solution())->generateParenthesis($n));