<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        if($num==1||$num==0)return false;
        $i=1;
        $sum=0;
        while($i*$i<=$num){
            if($num%$i==0){
                $sum+=($i+$num/$i);
            }
            $i++;
        }
        return $sum/2==$num;
    }
}
$num=28;
var_dump((new Solution())->checkPerfectNumber($num));