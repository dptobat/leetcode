<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    //给定一个整数数组 a，其中1 ≤ a[i] ≤ n （n为数组长度）, 其中有些元素出现两次而其他元素出现一次。
    //
    //找到所有出现两次的元素。
    //
    //你可以不用到任何额外空间并在O(n)时间复杂度内解决这个问题吗？
    //
    //示例：
    //
    //输入:
    //[4,3,2,7,8,2,3,1]
    //
    //输出:
    //[2,3]
    function findDuplicates($nums) {
        $nums_count=count($nums);
        $res=[];
        for($i=0;$i<$nums_count;$i++){
            $tmp=abs($nums[$i]);
            if($nums[$tmp-1]>0){
                $nums[$tmp-1]*=-1;
            }else{
                $res[]=$tmp;
            }
        }
        return $res;
    }
}
$nums=[4,3,2,7,8,2,3,1];
var_dump((new Solution())->findDuplicates($nums));