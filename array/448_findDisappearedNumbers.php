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
        $nums_count=count($nums);
        for($i=0;$i<$nums_count;$i++){
            //求绝对值;
            $index=abs($nums[$i]);
            $nums[$index-1]=min($nums[$index-1],-$nums[$index-1]);
        }
        //这样遍历出那些大于零的;
        $remain_array=[];
        for($i=0;$i<$nums_count;$i++){
            if($nums[$i]>0){
                $remain_array[]=$i+1;
            }
        }
        return $remain_array;
    }
}
$nums=[4,3,2,7,8,2,3,1];
var_dump( (new Solution())->findDisappearedNumbers($nums));