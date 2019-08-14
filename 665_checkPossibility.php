<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    /*给定一个长度为 n 的整数数组，你的任务是判断在最多改变 1 个元素的情况下，该数组能否变成一个非递减数列。

    我们是这样定义一个非递减数列的： 对于数组中所有的 i (1 <= i < n)，满足 array[i] <= array[i + 1]。

    示例 1:

    输入: [4,2,3]
    输出: True
    解释: 你可以通过把第一个4变成1来使得它成为一个非递减数列。
    示例 2:

    输入: [4,2,1]
    输出: False
    解释: 你不能在只改变一个元素的情况下将其变为非递减数列。*/

    function checkPossibility($nums) {
        //记录要调整的数;超过两个就返回false;
        $nums_count=count($nums);
        $count=0;
        for($i=0;$i<$nums_count-1;$i++){
            if($nums[$i]>$nums[$i+1]){
                $count++;
            }
            if($count>1){
                return false;
            }
        }
        return true;
    }
}
$nums=[3,4,2,3];
var_dump((new Solution())->checkPossibility($nums));