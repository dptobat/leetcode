<?php


class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    //给定两个由小写字母构成的字符串 A 和 B ，只要我们可以通过交换 A 中的两个字母得到与 B 相等的结果，就返回 true ；否则返回 false 。
    //
    // 
    //
    //示例 1：
    //
    //输入： A = "ab", B = "ba"
    //输出： true
    //示例 2：
    //
    //输入： A = "ab", B = "ab"
    //输出： false
    //示例 3:
    //
    //输入： A = "aa", B = "aa"
    //输出： true
    //示例 4：
    //
    //输入： A = "aaaaaaabc", B = "aaaaaaacb"
    //输出： true
    //示例 5：
    //
    //输入： A = "", B = "aa"
    //输出： false

    function buddyStrings($A, $B) {
        //找到AB不相等的部分然后进行交换;
        $a_length=strlen($A);
        $b_length=strlen($B);
        if($a_length!==$b_length)return false;
        //定义两个不同的指针;$i,$j;
        $i=0;
        $j=0;
        $count=0;
        //判断是否有重复的元素;
        while($i<$a_length){

        }

        return ;
    }
}
$A= "bcaaaaaaaaaaaaaaaa";
$B ="abcaaaaaaaaaaaaaaa";
var_dump((new Solution())->buddyStrings($A,$B));