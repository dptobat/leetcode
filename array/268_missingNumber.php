<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
//给定一个包含 0, 1, 2, ..., n 中 n 个数的序列，找出 0 .. n 中没有出现在序列中的那个数。
//
//示例 1:
//
//输入: [3,0,1]
//输出: 2
//示例 2:
//
//输入: [9,6,4,2,3,5,7,0,1]
//输出: 8
//说明:
//你的算法应具有线性时间复杂度。你能否仅使用额外常数空间来实现?

    function missingNumber($nums) {
        //由于是确实的那个数;求出总数;
        $nums_count=count($nums);
        $sum_0_to_n=($nums_count)*($nums_count+1)/2;
        foreach ($nums as $num) {
            $sum_0_to_n-=$num;
        }
        return $sum_0_to_n;
    }
}

$nums=[9,6,4,2,3,5,7,0,1];
var_dump((new Solution())->missingNumber($nums));
