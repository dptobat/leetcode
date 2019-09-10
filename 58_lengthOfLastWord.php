<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    //给定一个仅包含大小写字母和空格 ' ' 的字符串，返回其最后一个单词的长度。
    //
    //如果不存在最后一个单词，请返回 0 。
    //
    //说明：一个单词是指由字母组成，但不包含任何空格的字符串。
    //
    //示例:
    //
    //输入: "Hello World"
    //输出: 5
    function lengthOfLastWord($s) {
        $s_length=strlen($s);
        $length=0;
        //倒着来
        $start_flag=false;
        for($i=$s_length-1;$i>=0;$i--){
            if($s[$i]==' '){
                if($start_flag){
                    return $length;
                }
            }else{
                $start_flag=true;
                $length++;
            }
        }
        return $length;
    }
}
$s="a ";
var_dump((new Solution())->lengthOfLastWord($s));