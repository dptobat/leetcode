<?php


class Solution {

    /**
     * @param Integer $N
     * @return Integer
     */
    function fib($N) {
        $array=[0,1];
        for($i=2;$i<$N+1;$i++){
            $array[]=$array[$i-1]+$array[$i-2];
        }
        return $array[$N];
    }
}
$N=3;
var_dump((new Solution())->fib($N));