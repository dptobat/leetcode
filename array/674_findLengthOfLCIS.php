<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    /*给定一个未经排序的整数数组，找到最长且连续的的递增序列。

    示例 1:

    输入: [1,3,5,4,7]
    输出: 3
    解释: 最长连续递增序列是 [1,3,5], 长度为3。
    尽管 [1,3,5,7] 也是升序的子序列, 但它不是连续的，因为5和7在原数组里被4隔开。
    示例 2:

    输入: [2,2,2,2,2]
    输出: 1
    解释: 最长连续递增序列是 [2], 长度为1。*/
    function findLengthOfLCIS($nums) {
        $nums_count=count($nums);
        if($nums_count==0)return 0;
        $times=$max_times=1;
        for($i=0;$i<$nums_count-1;$i++){
            //说明是连续的;
            if($nums[$i]<$nums[$i+1]){
                $times++;
            }else{
                $max_times=max($times,$max_times);
                $times=1;
            }
        }
        return max($times,$max_times);
    }
}

$nums=[1,3,5,7];
var_dump((new Solution())->findLengthOfLCIS($nums));