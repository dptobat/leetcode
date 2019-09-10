<?php


class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    //给定一个Excel表格中的列名称，返回其相应的列序号。
    //
    //例如，
    //
    //    A -> 1
    //    B -> 2
    //    C -> 3
    //    ...
    //    Z -> 26
    //    AA -> 27
    //    AB -> 28
    //    ...
    //示例 1:
    //
    //输入: "A"
    //输出: 1
    //示例 2:
    //
    //输入: "AB"
    //输出: 28
    //示例 3:
    //
    //输入: "ZY"
    //输出: 701
    function titleToNumber($s) {
        //就是相当于26进制;
       $s_length=strlen($s);
       $sum=$i=0;
       while($i<$s_length){
           $sum*=26;
           $sum+=ord($s[$i])-ord('A')+1;
           $i++;
       }
       return $sum;
    }
}
$s="AB";
var_dump((new Solution())->titleToNumber($s));