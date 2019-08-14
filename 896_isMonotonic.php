<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */

    function isMonotonic($A) {
        //首先使用第一个和第二个数判断基调;
        $A_count = count($A);
        if ($A_count < 2) return false;
//        $flag=$A[0]-$A[1];
        for ($i = 0; $i < $A_count - 1; $i++) {
            if ($A[$i] == $A[$i + 1]) {
                continue;
            }
            $diff = $A[$i + 1] - $A[$i];
            isset($flag) or $flag = ($diff > 0 ? 1 : -1);
            if ($flag * $diff < 0) {
                return false;
            }
        }
        return true;
    }
}

$A = [1, 1, 1];
var_dump((new Solution())->isMonotonic($A));