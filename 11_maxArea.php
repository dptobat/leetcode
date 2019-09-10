<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $maxArea=0;
        $height_count=count($height);
        $i=0;
        $j=$height_count-1;
        while($i<$j){
            $maxArea=max(($j-$i)*($height[$i]>$height[$j]?$height[$j--]:$height[$i++]),$maxArea);
        }
        return $maxArea;
    }
}
$height= [1,8,6,2,5,4,8,3,7];
var_dump((new Solution())->maxArea($height));