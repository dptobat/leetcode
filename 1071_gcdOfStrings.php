<?php

class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
//对于字符串 S 和 T，只有在 S = T + ... + T（T 与自身连接 1 次或多次）时，我们才认定 “T 能除尽 S”。
//
//返回字符串 X，要求满足 X 能除尽 str1 且 X 能除尽 str2。
//
// 
//
//示例 1：
//
//输入：str1 = "ABCABC", str2 = "ABC"
//输出："ABC"
//示例 2：
//
//输入：str1 = "ABABAB", str2 = "ABAB"
//输出："AB"
//示例 3：
//
//输入：str1 = "LEET", str2 = "CODE"
//输出：""

    function gcdOfStrings($str1, $str2) {
        //其实就是求公约数;
        $divisor1=strlen($str1);
        $divisor2=strlen($str2);
        while($divisor=$divisor1%$divisor2){
            [$divisor1,$divisor2]=[$divisor2,$divisor];
        }
        //截取$divisor2;
        $gcd='';
        $str1.=$str2;
        $str1_length=strlen($str1);
        for($i=0;$i<$str1_length;$i++){
            $gcd.=$str1[$i];
            if(($i+1)%$divisor2==0){
                isset($common) or $common=$gcd;
                if($common!==$gcd){
                    return "";
                }
                $gcd='';
            }
        }
        return $common;
    }
}

$str1 = "LEET"; $str2 = "CODE";
var_dump((new Solution())->gcdOfStrings($str1,$str2));