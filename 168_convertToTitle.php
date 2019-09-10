<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function convertToTitle($n) {
        $str='';
        while($n>0){
            --$n;
            $mod=$n%26;
            $str.=chr(ord('A')+$mod);
            $n=intval($n/26);
        }
        return strrev($str);
    }
}
$n=701;
var_dump((new Solution())->convertToTitle($n));