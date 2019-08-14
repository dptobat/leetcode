<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $nums_count = count($nums);
        if ($target < $nums[0]) return 0;
        if ($target > $nums[$nums_count - 1]) return $nums_count;
//使用二分查找;
        return $this->midSearch($nums, 0, $nums_count - 1, $target);
    }
    //需要优化；其他人写法更好;
    function midSearch($nums, $low, $high, $target) {
        $mid = $low + (($high - $low) >> 1);//(($high-$low)>>1)这一段一定要打括号，不然就是先执行加法了;
        if ($target > $nums[$mid] && $target < $nums[$mid + 1]) {
            return $mid + 1;
        }
        if ($target > $nums[$mid]) {
            //可以不用递归调用;明天重新写一次;
            return $this->midSearch($nums, $mid + 1, $high, $target);
        } else if ($target < $nums[$mid]) {
            return $this->midSearch($nums, $low, $mid - 1, $target);
        } else {
            return $mid;
        }
    }

}

var_dump((new Solution())->searchInsert([1, 3, 5, 6], 0));
