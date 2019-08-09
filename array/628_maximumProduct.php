<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //比较三个数的乘积；每次记录三个数中的最小数;然后依次向后遍历;找到比最小的大的就替换;时间复杂度O(n)
    function maximumProduct($nums) {
        //每次需要求三个数中的最小数;
        //先排序，（然后找左边的最小的两个数，和右边的最大）。（右边最大的3个数）做乘法;
        $nums_count = count($nums);
        $this->quickSort($nums, 0, $nums_count - 1);
        return max($nums[0] * $nums[1] * $nums[$nums_count - 1], $nums[$nums_count - 1] * $nums[$nums_count - 2] * $nums[$nums_count - 3]);
    }

    function quickSort(&$nums, $start, $end) {
        //使用哨兵做监听;
        if ($start >= $end) return;
        $index = $this->partition($nums, $start, $end);
        $this->quickSort($nums, $start, $index - 1);
        $this->quickSort($nums, $index + 1, $end);
    }

    function partition(&$nums, $start, $end) {
        $start_index = $start;
        $base = $nums[$start_index];
        while ($start < $end) {
            while ($base < $nums[$end] && $start < $end) {
                $end--;
            }
            while ($base >= $nums[$start] && $start < $end) {
                $start++;
            }
            //交换数据;
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
        }
        //start指向的数据和base做交换;
        [$nums[$start_index], $nums[$start]] = [$nums[$start], $base];
        return $start;
    }
}
$nums= [1,2,3,4];
var_dump( (new Solution())->maximumProduct($nums));