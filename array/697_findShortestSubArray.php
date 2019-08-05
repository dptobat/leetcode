<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    /*给定一个非空且只包含非负数的整数数组 nums, 数组的度的定义是指数组里任一元素出现频数的最大值。

    你的任务是找到与 nums 拥有相同大小的度的最短连续子数组，返回其长度。

    示例 1:

    输入: [1, 2, 2, 3, 1]
    输出: 2
    解释:
    输入数组的度是2，因为元素1和2的出现频数最大，均为2.
    连续子数组里面拥有相同度的有如下所示:
    [1, 2, 2, 3, 1], [1, 2, 2, 3], [2, 2, 3, 1], [1, 2, 2], [2, 2, 3], [2, 2]
    最短连续子数组[2, 2]的长度为2，所以返回2.
    示例 2:

    输入: [1,2,2,3,1,4,2]
    输出: 6*/

    function findShortestSubArray($nums) {
        //定义两个数组一个记录出现的次数，
        $nums_count = count($nums);
        //记录出现的次数;
        $times_array = [];
        //记录起始位置
        $position_array = [];
        for ($i = 0; $i < $nums_count; $i++) {
            if (isset($times_array[$nums[$i]])) {
                $times_array[$nums[$i]]++;
                $position_array[$nums[$i]]['end'] = $i;
            } else {
                $times_array[$nums[$i]] = 1;
                $position_array[$nums[$i]]['end'] = $position_array[$nums[$i]]['start'] = $i;
            }
        }

        $max = 0;
        //还要确定值范围;
        $min_position = 0;
        //有可能并列;
        foreach ($times_array as $num => $times) {
            if ($times > $max) {
                $max = $times;
                $min_position = $position_array[$num]['end'] - $position_array[$num]['start'];
            } elseif ($times == $max) {
                //比较范围大小;
                $min_position = min($position_array[$num]['end'] - $position_array[$num]['start'], $min_position);
            }
        }
        return $min_position + 1;
    }
}

$nums = [1, 2, 2, 3, 1, 4, 2];
var_dump((new Solution())->findShortestSubArray($nums));