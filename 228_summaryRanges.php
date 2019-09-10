<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    //给定一个无重复元素的有序整数数组，返回数组区间范围的汇总。
    //
    //示例 1:
    //
    //输入: [0,1,2,4,5,7]
    //输出: ["0->2","4->5","7"]
    //解释: 0,1,2 可组成一个连续的区间; 4,5 可组成一个连续的区间。
    //示例 2:
    //
    //输入: [0,2,3,4,6,8,9]
    //输出: ["0","2->4","6","8->9"]
    //解释: 2,3,4 可组成一个连续的区间; 8,9 可组成一个连续的区间。

    function summaryRanges($nums) {

        $nums_count=count($nums);
        $nums[]=$nums[$nums_count-1];
        $start=$nums[0];
        $res=[];
        for($i=1;$i<=$nums_count;$i++){
            //表示不是连续的;
            if($nums[$i]-$nums[$i-1]!=1){
                if($start==$nums[$i-1]){
                    $res[]="$start";
                }else{
                    $res[]="$start->{$nums[$i-1]}";
                }
                $start=$nums[$i];
            }
        }

        return $res;
    }
}
$nums=[0,1,2,4,5,7];
var_dump((new Solution())->summaryRanges($nums));