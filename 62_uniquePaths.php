<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        $dp=[];
        for($i=0;$i<$m;$i++){
            for($j=0;$j<$n;$j++){
                if ($i == 0 || $j == 0)
                    $dp[$i][$j] = 1;
                else {
                    $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
                }
            }
        }
        return $dp[$i-1][$j-1];
    }
}
$m=7;$n=3;
var_dump((new Solution())->uniquePaths($m,$n));