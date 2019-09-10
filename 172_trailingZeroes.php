<?php


class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function trailingZeroes($n) {
        //需要有5才能组成0;2*5=10;2的个数多，所以只需要找到n中5的倍数个数;
        $count=0;
        while($n>=5){
            $divisor=(int)($n/5);
            $count+=$divisor;
            $n=$divisor;
        }
        return $count;
    }
}
$n=10;
var_dump((new Solution())->trailingZeroes($n));