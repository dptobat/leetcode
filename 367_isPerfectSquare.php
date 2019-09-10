<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    //给定一个正整数 num，编写一个函数，如果 num 是一个完全平方数，则返回 True，否则返回 False。
    //
    //说明：不要使用任何内置的库函数，如  sqrt。
    //
    //示例 1：
    //
    //输入：16
    //输出：True
    //示例 2：
    //
    //输入：14
    //输出：False

    //使用二分查找;在做一遍；
    function isPerfectSquare($num) {
        $i=0;
        while(($square=$i*$i)<$num){
            $i++;
        }
        return $square==$num;
    }
}
$num=14;
var_dump((new Solution())->isPerfectSquare($num));