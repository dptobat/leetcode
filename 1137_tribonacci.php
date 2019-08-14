<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function tribonacci($n) {
        $arr[0]=0;
        $arr[1]=1;
        $arr[2]=1;
        for($i=3;$i<=$n;$i++){
            $arr[$i]=$arr[$i-2]+$arr[$i-1]+$arr[$i-3];
        }
        return $arr[$n];
    }
}

$n=25;

var_dump((new Solution())->tribonacci($n));