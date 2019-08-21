<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    //给定一个字符串和一个整数 k，你需要对从字符串开头算起的每个 2k 个字符的前k个字符进行反转。如果剩余少于 k 个字符，则将剩余的所有全部反转。如果有小于 2k 但大于或等于 k 个字符，则反转前 k 个字符，并将剩余的字符保持原样。
    //
    //示例:
    //
    //输入: s = "abcdefg", k = 2
    //输出: "bacdfeg"
    function reverseStr($s, $k) {
        $s_length=strlen($s);
        $part='';
        $start=0;
        for($i=0;$i<$s_length;$i++){
            $part.=$s[$i];
            if(($i+1)%(2*$k)==0){
                //这个时候应该翻转前k个字符;
                $end=$k+$start-1;
                while($start<$end){
                    [$s[$start],$s[$end]]=[$s[$end],$s[$start]];
                    $start++;$end--;
                }
                $start=$i+1;
            }
        }
        //针对没有2k的元素;
        $end=min($k+$start-1,$s_length-1);
        while($start<$end){
            [$s[$start],$s[$end]]=[$s[$end],$s[$start]];
            $start++;$end--;
        }
        return $s;
    }
}
$s = "abcdefg"; $k = 2;
var_dump((new Solution())->reverseStr($s,$k));