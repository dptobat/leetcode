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
        $max=$nums[0];
        for($i=0;$i<$nums_count;$i++){
            if($nums[$i]<=$max){
                //第一次进行初始化;
                if($start_index<0){
                    $start_index=$i-1;
                }
                if($nums[$i]!=$max){
                    $end_index=$i;
                }
            }else{
                $max=$nums[$i];
            }
        }
        return $end_index-$start_index<=0?0:$end_index-$start_index+1;
    }
}
$nums= [2,2];
var_dump((new Solution())->findUnsortedSubarray($nums));