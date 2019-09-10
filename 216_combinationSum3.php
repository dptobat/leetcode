<?php

class Solution {

    /**
     * @param Integer $k
     * @param Integer $n
     * @return Integer[][]
     */
    //找出所有相加之和为 n 的 k 个数的组合。组合中只允许含有 1 - 9 的正整数，并且每种组合中不存在重复的数字。
    //
    //说明：
    //
    //所有数字都是正整数。
    //解集不能包含重复的组合。 
    //示例 1:
    //
    //输入: k = 3, n = 7
    //输出: [[1,2,4]]
    //示例 2:
    //
    //输入: k = 3, n = 9
    //输出: [[1,2,6], [1,3,5], [2,3,4]]

    function combinationSum3($k, $n) {
        //使用回溯;

        $res=[];
        $this->def(1,0,0,$k,$n,$res,[]);
        return $res;
    }
    function def($start,$count,$sum,$k,$n,&$res,$tmp){
        if($count>$k)return;
        if($sum==$n&&$k==$count){
            $res[]=$tmp;
            return;
        }
        for($i=$start;$i<10;$i++){
            $tmp[]=$i;
            $sum+=$i;
            $count++;
            $this->def($i+1,$count,$sum,$k,$n,$res,$tmp);
            array_pop($tmp);
            $sum-=$i;
            $count--;
        }
    }
}
$k=3;$n=15;
var_dump((new Solution())->combinationSum3($k,$n));