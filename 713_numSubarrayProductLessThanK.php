<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function numSubarrayProductLessThanK($nums, $k) {
        $nums_count=count($nums);
        $res=0;
        $l=0;
        $mult=1;
        for($i=0;$i<$nums_count;$i++){
            $mult*=$nums[$i];
            while($mult>=$k){
//               $mult
                return;
            }
            $res+=$i-$l+1;
        }
        return $res;
    }
}
$nums = [10,9,10,4,3,8,3,3,6,2,10,10,9,3]; $k = 19;
var_dump((new Solution())->numSubarrayProductLessThanK($nums,$k));