<?php

class Solution {

    /**
     * @param Integer $c
     * @return Boolean
     */
    //给定一个非负整数 c ，你要判断是否存在两个整数 a 和 b，使得 a2 + b2 = c。
    //
    //示例1:
    //
    //输入: 5
    //输出: True
    //解释: 1 * 1 + 2 * 2 = 5
    // 
    //
    //示例2:
    //
    //输入: 3
    //输出: False
    function judgeSquareSum($c) {
        //使用折半查找;确定$c的平方和范围;
        $left=0;
        $right=$c;
        if($c==0||$c==1){
            return true;
        }
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($mid<$c/$mid){
                $j=$mid;
                $left=$mid+1;
            }elseif($mid>$c/$mid){
                $right=$mid-1;
            }else{
                return true;
            }
        }
        $i=0;
        while($i<=$j){
            $square=$i*$i+$j*$j;
            if($square<$c){
                $i++;
            }elseif($square>$c){
                $j--;
            }else{
                return true;
            }
        }
        return false;
    }
}
$c=9;
var_dump((new Solution())->judgeSquareSum($c));