<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer[]
     */
    function fairCandySwap($A, $B) {
        //第一求出两个的平均数;
        $A_count = count($A);
        $A_sum = array_sum($A);
        $B_sum = array_sum($B);
        //找到平均差值;
        $diff = ((($A_sum + $B_sum) >> 1) - $B_sum);
        //也就是需要用B中的数减去A中的数;
        for ($i = 0; $i < $A_count; $i++) {
            if(in_array($A[$i]-$diff,$B)){
                return [$A[$i], $A[$i]-$diff];
            }
        }
    }
}

$A = [1, 2, 5];
$B = [2, 4];
var_dump((new Solution())->fairCandySwap($A, $B));