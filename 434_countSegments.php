<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    //统计字符串中的单词个数，这里的单词指的是连续的不是空格的字符。
    //
    //请注意，你可以假定字符串里不包括任何不可打印的字符。
    //
    //示例:
    //
    //输入: "Hello, my name is John"
    //输出: 5

    function countSegments($s) {
        //判断是不是单词;
        $s.=' ';
        $s_length=strlen($s);
        $word_count=0;
        $start_flag=false;
        for($i=0;$i<$s_length;$i++){
            if($s[$i]==' '){
                if($start_flag){
                    $word_count++;
                }
                $start_flag=false;
            }else{
                $start_flag=true;
            }
        }
        return $word_count;
    }
}
$s="love live! mu'sic forever";
var_dump((new Solution())->countSegments($s));