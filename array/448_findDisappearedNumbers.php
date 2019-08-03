<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    /*给定一个范围在  1 ≤ a[i] ≤ n ( n = 数组大小 ) 的 整型数组，数组中的元素一些出现了两次，另一些只出现一次。

    找到所有在 [1, n] 范围之间没有出现在数组中的数字。

    您能在不使用额外空间且时间复杂度为O(n)的情况下完成这个任务吗? 你可以假定返回的数组不算在额外空间内。

    示例:

    输入:
    [4,3,2,7,8,2,3,1]

    输出:
    [5,6]*/

    function findDisappearedNumbers($nums) {
        //定义次数,定义最大次数;
        $times=$max_times=0;
        $nums_count=count($nums);
        for($i=0;$i<$nums_count;$i++){
            if($nums[$i]==1){
                $times++;
            }else if($times!=0){
                $max_times=max($max_times,$times);
                //重新计数;
                $times=0;
            }
        }
        $max_times=max($max_times,$times);
        return $max_times;
    }
}


$nums=[1,1,0,1,1,1];
var_dump((new Solution())->findDisappearedNumbers($nums));