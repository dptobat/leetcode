<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    //给定一个非负整数 num，反复将各个位上的数字相加，直到结果为一位数。
    //
    //示例:
    //
    //输入: 38
    //输出: 2
    //解释: 各位相加的过程为：3 + 8 = 11, 1 + 1 = 2。 由于 2 是一位数，所以返回 2。
    //进阶:
    //你可以不使用循环或者递归，且在 O(1) 时间复杂度内解决这个问题吗？
    //除了传统的单纯循环，还可以找规律。
    //假如一个三位数'abc'，其值大小为s1 = 100 * a + 10 * b + 1 * c，
    //经过一次各位相加后，变为s2 = a + b + c，减小的差值为(s1 -s2) = 99 * a + 9 * b，差值可以被9整除，
    //每一个循环都这样，缩小了9的倍数。当num小于9，即只有一位时，直接返回num，大于9时，如果能被9整除，
    //则返回9（因为不可能返回0也不可能返回两位数及以上的值），如果不能被整除，就返回被9除的余数。
    function addDigits($num) {
        while($num>9){
            $divisor=$num;
            $sum=0;
            while($divisor){
               $mod=$divisor%10;
               $sum+=$mod;
               $divisor=(int)($divisor/10);
            }
            $num=$sum;
        }
        return $num;
    }
}
$num=125;
var_dump((new Solution())->addDigits($num));