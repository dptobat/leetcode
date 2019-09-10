<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        $num1_length=strlen($num1);
        $num2_length=strlen($num2);
        //定义一个进位数;
        //定义一个计算数;
        $sum=0;
        for($i=$num1_length-1,$position=1;$i>=0;$i--,$position*=10){
            $num=0;
            for($j=$num2_length-1,$num_digit=1;$j>=0;$j--,$num_digit*=10){
               $num=$num+(ord($num1[$i])-ord('0'))*(ord($num2[$j])-ord('0'))*$num_digit;

            }
            $sum+=$num*$position;
        }
        return ''.$sum;
    }
}
$num1="123";$num2="456";
var_dump((new Solution())->multiply($num1,$num2));