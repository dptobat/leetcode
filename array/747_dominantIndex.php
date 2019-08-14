<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function dominantIndex($nums) {
        //其实就是找最大值和第二大值;
        //定义一个最大值，和一个第二大的值;

        $nums_count=count($nums);
        $max=$second=PHP_INT_MIN;
        $start_index=0;
        for($i=0;$i<$nums_count;$i++){
            if($nums[$i]>$max){
                $second=$max;
                $max=$nums[$i];
                $start_index=$i;
            }elseif($nums[$i]>$second){
                $second=$nums[$i];
            }
        }
        return $max>=$second*2?$start_index:-1;
    }
}
$nums=[0,0,0,1];
var_dump((new Solution())->dominantIndex($nums));