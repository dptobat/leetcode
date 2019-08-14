<?php


class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function canThreePartsEqualSum($A) {
        //获取每等份；
        $a_sum=array_sum($A);
        //如果不能被3整除就直接返回false;
        if($a_sum%3!=0){
            return false;
        }
        $average=$a_sum/3;

        $average_sum=$times=0;
        foreach ($A as $value){
            $average_sum+=$value;
            if($average_sum===$average){
                $times++;
                $average_sum=0;
            }
        }
        return $times==3;
    }
}
$A=[3,3,6,5,-2,2,5,1,-9,4];
var_dump((new Solution())->canThreePartsEqualSum($A));