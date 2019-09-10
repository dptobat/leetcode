<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    //给定一个非空字符串 s，最多删除一个字符。判断是否能成为回文字符串。
    //
    //示例 1:
    //
    //输入: "aba"
    //输出: True
    //示例 2:
    //
    //输入: "abca"
    //输出: True
    //解释: 你可以删除c字符。

    function validPalindrome($s) {
        //就是要确定要删除哪个;
        $i=0;
        $j=strlen($s)-1;
        $count=0;
        while($i<$j){
            //判断$i,$j指向的数是否相等;
            if($s[$i]==$s[$j]){
                $i++;$j--;continue;
            }
            //处理不相等的时候;就是判断到底是删除头还是删除尾巴;
            if($s[$j-1]==$s[$i]){
                $j--;
                $count++;
            }elseif($s[$i+1]==$s[$j]){
                $i++;
                $count++;
            }else{

                return false;
            }

            if($count>1){
                return false;
            }
        }
        return true;
    }
}
$s= "ececabbacec";
var_dump((new Solution())->validPalindrome($s));