<?php


class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean[]
     */
    function prefixesDivBy5($A) {
        $sum = 0;
        foreach ($A as $value) {
            $sum = ($sum << 1) + $value;
            //因为是5的倍数，所以只需要最后一位是0或者5;也就是永远都只算10进制最后一位的值;
            $sum %= 10;
            $result[] = $sum % 5 === 0;
        }
        return $result;
    }
}

$A = [0,1,1,1,1,1];
var_dump((new Solution())->prefixesDivBy5($A));
