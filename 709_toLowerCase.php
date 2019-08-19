<?php


class Solution {

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str) {
        $str_length=strlen($str);
        for($i=0;$i<$str_length;$i++){
            //如果在A-Z之间;
            if($str[$i]>='A'&&$str[$i]<='Z'){
                $str[$i]=chr(ord($str[$i])+ord('a')-ord('A'));
            }
        }
        return $str;
    }
}
$str="Hello";
var_dump((new Solution())->toLowerCase($str));