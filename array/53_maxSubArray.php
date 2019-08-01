<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。
    function maxSubArray($nums) {
        //使用动态规划求解;
        $nums_count=count($nums);
        if($nums_count==1){return $nums[0];}
        //针对获取最大值问题;
        $max=PHP_INT_MIN;
        $sum=0;
        for($i=0;$i<$nums_count;$i++) {
            $sum+=$nums[$i];
            $sum>$max&&$max=$sum;
            $sum<0&&$sum=0;
        }
        return $max;
    }
}
$nums=[-2,-1];
var_dump((new Solution())->maxSubArray($nums));