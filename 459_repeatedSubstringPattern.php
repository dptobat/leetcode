<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    //给定一个非空的字符串，判断它是否可以由它的一个子串重复多次构成。给定的字符串只含有小写英文字母，并且长度不超过10000。
    //
    //示例 1:
    //
    //输入: "abab"
    //
    //输出: True
    //
    //解释: 可由子字符串 "ab" 重复两次构成。
    //示例 2:
    //
    //输入: "aba"
    //
    //输出: False
    //示例 3:
    //
    //输入: "abcabcabcabc"
    //
    //输出: True
    //
    //解释: 可由子字符串 "abc" 重复四次构成。 (或者子字符串 "abcabc" 重复两次构成。)
    function repeatedSubstringPattern($s) {
        $s_length = strlen($s);
        if($s_length<2)return false;
        //找到可以被s除尽的数;
        $i=1;
        $repeat=[];
        while($i<=($s_length>>1)){
            $s_length%$i==0&&$repeat[]=$i;
            $i++;
        }

        //根据$i来
        $repeat_count=count($repeat);
        for($i=0;$i<$repeat_count;$i++){
            $common='';
            $word='';
            for($j=0;$j<$s_length;$j++){
                $word.=$s[$j];
                if(($j+1)%$repeat[$i]==0){
                    empty($common)&&$common=$word;
                    if($word!==$common){
                        break;
                    }
                    $word='';
                }
            }
            if($word==''){
                return true;
            }
        }
        return false;
    }
}
$s="abcabc";
var_dump((new Solution())->repeatedSubstringPattern($s));