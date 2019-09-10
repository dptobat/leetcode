<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //给定一个整数数组 nums ，找出一个序列中乘积最大的连续子序列（该序列至少包含一个数）。
    //
    //示例 1:
    //
    //输入: [2,3,-2,4]
    //输出: 6
    //解释: 子数组 [2,3] 有最大乘积 6。
    //示例 2:
    //
    //输入: [-2,0,-1]
    //输出: 0
    //解释: 结果不能为 2, 因为 [-2,-1] 不是子数组。

    function maxProduct($nums) {
        //其实就是每次都把最大值和当前的乘积和当前的进行比较;
        $nums_count = count($nums);
        $max = 1;
        $min = 1;
        $result=PHP_INT_MIN;
        for ($i = 0; $i < $nums_count; $i++) {
            $nums[$i] < 0 && ([$max, $min] = [$min, $max]);
            $max = max($max * $nums[$i], $nums[$i]);
            //主要是为了统计负数;负数越小,下一个遇到负数越大;
            $min = min($min * $nums[$i], $nums[$i]);
            $result=max($max,$result);
        }
        return $result;

    }
}

$nums = [0, -1, -2];
var_dump((new Solution())->maxProduct($nums));