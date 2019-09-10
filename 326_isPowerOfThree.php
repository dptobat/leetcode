<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if($n==0)return false;
        while ($n % 3 == 0) {
            $n =(int)($n/3);
        }
        return $n == 1;
    }
}
$n=45;
var_dump((new Solution())->isPowerOfThree($n));