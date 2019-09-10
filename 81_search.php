<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Boolean
     */
    function search($nums, $target) {
        $nums_count=count($nums);
        //判断那一边是有序的;
        $left=0;
        $right=$nums_count-1;
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($nums[$mid]==$target){
                return true;
            }
            if($target==$nums[$right]){
                return true;
            }
            if($target==$nums[$left]){
                return true;
            }
        }
        return false;
    }
}
$nums= [1,1,3,1];
$target=3;
var_dump((new Solution())->search($nums,$target));