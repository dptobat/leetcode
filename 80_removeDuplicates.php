<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums_count = count($nums);
        $index=2;
        for($i=2;$i<$nums_count;$i++){
            if($nums[$i]==$nums[$index-2]&&$nums[$i]==$nums[$index-1]){
               continue;
            }
            $nums[$index++]=$nums[$i];
        }
        return $index;
    }
}
$nums=  [0,0,0,0,1,1,1,1,1,1,1,1,2,2,2,3,3,3,3];
$nums=[1,1,1,2,2,3];
//$nums=[1,1,1,1,1,1,2,2,3,3,3,3,3,3,3];
var_dump((new Solution())->removeDuplicates($nums));