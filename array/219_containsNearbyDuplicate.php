<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    /*给定一个整数数组和一个整数 k，判断数组中是否存在两个不同的索引 i 和 j，使得 nums [i] = nums [j]，并且 i 和 j 的差的绝对值最大为 k。

    示例 1:

    输入: nums = [1,2,3,1], k = 3
    输出: true
    示例 2:

    输入: nums = [1,0,1,1], k = 1
    输出: true
    示例 3:

    输入: nums = [1,2,3,1,2,3], k = 2
    输出: false*/

    function containsNearbyDuplicate($nums, $k) {
        //使用一个数组存储位置;
        $nums_count=count($nums);
        $index=[];
        for($i=0;$i<$nums_count;$i++){
            if(isset($index[$nums[$i]])&&$i-$index[$nums[$i]]<=$k){
                return true;
            }
            $index[$nums[$i]]=$i;
        }
        return  false;
    }
}
$nums=[1,0,1,1];
$k=1;
var_dump( (new Solution())->containsNearbyDuplicate($nums,$k));