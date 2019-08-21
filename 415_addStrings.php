<?php


class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $num1_length=strlen($num1);
        $i=$num1_length-1;
        $num2_length=strlen($num2);
        $j=$num2_length-1;
        $result='';
        $carry=0;
        while($i>=0||$j>=0||$carry!=0){
            if($i>=0) $carry += $num1[$i--]-'0';
            if($j>=0) $carry += $num2[$j--]-'0';
            $result.=$carry%10;
            $carry =(int)($carry/10);
        }
        return strrev($result);
    }
}
$num1='23121231';$num2='9999999';
var_dump((new Solution())->addStrings($num1,$num2));