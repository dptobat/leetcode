<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    //统计所有小于非负整数 n 的质数的数量。
    //
    //示例:
    //
    //输入: 10
    //输出: 4
    //解释: 小于 10 的质数一共有 4 个, 它们是 2, 3, 5, 7 。
    function countPrimes($n) {
        $count=0;
        for($i=2;$i<$n;$i++){
            if($this->checkPrime($i)){
                $count++;
            }
        }
        return $count;
    }


    //判断一个数是不是质数;
    function checkPrime($num){
        $i=2;
        //只用在平方根之内找就好了
        while($i*$i<=$num){
            if($num%$i==0){
                return false;
            }
            $i++;
        }
        return true;
    }
}
$n=10;
var_dump((new Solution())->countPrimes($n));