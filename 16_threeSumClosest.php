<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        $nums_count=count($nums);
        $min_sum=$min_closer=PHP_INT_MAX;
        sort($nums);
        for($i=0;$i<$nums_count-1;$i++){
            $j=$i+1;
            $k=$nums_count-1;
            while($j<$k){
                $sum=$nums[$i]+$nums[$j]+$nums[$k];
                if($sum==$target)return $sum;
                if(abs($sum-$target)<$min_closer){
                       $min_closer=abs($sum-$target);
                       $min_sum=$sum;
                   }
                if($sum-$target>0){
                    $k--;
                }else{
                    $j++;
                }
            }
        }
        return $min_sum;
    }
}
$nums=[-1,2,1,-4];$target = 1;
var_dump((new Solution())->threeSumClosest($nums,$target));