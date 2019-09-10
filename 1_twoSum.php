<?php

class Solution {
    function twoSum($nums, $target) {
        $nums_count=count($nums);
        $nums_array=[];
        for($i=0;$i<$nums_count;$i++){
            $nums_array[$nums[$i]]=$i;
        }
        for($i=0;$i<$nums_count;$i++){
            if(isset($nums_array[$target-$nums[$i]])&&$i!=$nums_array[$target-$nums[$i]]){
                return [$i,$nums_array[$target-$nums[$i]]];
            }
        }
        return false;
    }
}
$nums = [2, 7, 11, 15]; $target = 9;
var_dump((new Solution())->twoSum($nums,$target));