<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findUnsortedSubarray($nums) {
        //首先记录第一个需要降序的索引,然后不停的更新最后一个索引;
        $nums_count=count($nums);
        $start_index=$end_index=-1;
        //应该是使用最大值;



    }
}
$nums=  [1,2,4,5,3];
var_dump((new Solution())->findUnsortedSubarray($nums));