<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        //当遍历到空格就将单词翻转;
        $s.=' ';
        $s_length=strlen($s);
        $word='';
        $i=0;
        $word_start=0;
        while($i<$s_length){
            if($s[$i]==' '){
                //将word翻转;并且清空;
                $word_length=strlen($word);
                $start=$word_start;
                $end=$word_start+$word_length-1;
                while ($start<$end){
                    [$s[$start],$s[$end]]=[$s[$end],$s[$start]];
                    $start++;$end--;
                }
                $word_start+=($word_length+1);
                $word='';
            }else {
                $word .= $s[$i];
            }
            $i++;
        }
        //去掉最后一个' ';
        return substr($s,0,$s_length-1);
    }
}
$s="Let's take LeetCode contest";
var_dump((new Solution())->reverseWords($s));