<?php

class Solution {

    /**
     * @param String $S
     * @return String
     */
    //给定一个字符串 S，返回 “反转后的” 字符串，其中不是字母的字符都保留在原地，而所有字母的位置发生反转。
    //
    // 
    //
    //示例 1：
    //
    //输入："ab-cd"
    //输出："dc-ba"
    //示例 2：
    //
    //输入："a-bC-dEf-ghIj"
    //输出："j-Ih-gfE-dCba"
    //示例 3：
    //
    //输入："Test1ng-Leet=code-Q!"
    //输出："Qedo1ct-eeLg=ntse-T!"
    // 
    //
    //提示：
    //
    //S.length <= 100
    //33 <= S[i].ASCIIcode <= 122 
    //S 中不包含 \ or "

    function reverseOnlyLetters($S) {
        $s_length=strlen($S);
        $i=0;
        $j=$s_length-1;
        while($i<$j){
            //判断是不是字母;
            if($S[$i]>'z'||$S[$i]<'A'||($S[$i]>'Z'&&$S[$i]<'a')){
                $i++;
                continue;
            }
            if($S[$j]>'z'||$S[$j]<'A'||($S[$j]>'Z'&&$S[$j]<'a')){
                $j--;
                continue;
            }
            [$S[$i],$S[$j]]=[$S[$j],$S[$i]];
            $i++;$j--;
        }
        return $S;
    }
}
$S="a-bC-dEf-ghIj";
var_dump((new Solution())->reverseOnlyLetters($S));