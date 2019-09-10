<?php

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @param Integer $bound
     * @return Integer[]
     */
    //给定两个正整数 x 和 y，如果某一整数等于 x^i + y^j，其中整数 i >= 0 且 j >= 0，那么我们认为该整数是一个强整数。
    //
    //返回值小于或等于 bound 的所有强整数组成的列表。
    //
    //你可以按任何顺序返回答案。在你的回答中，每个值最多出现一次。
    //
    // 
    //
    //示例 1：
    //
    //输入：x = 2, y = 3, bound = 10
    //输出：[2,3,4,5,7,9,10]
    //解释：
    //2 = 2^0 + 3^0
    //3 = 2^1 + 3^0
    //4 = 2^0 + 3^1
    //5 = 2^1 + 3^1
    //7 = 2^2 + 3^1
    //9 = 2^3 + 3^0
    //10 = 2^0 + 3^2
    //示例 2：
    //
    //输入：x = 3, y = 5, bound = 15
    //输出：[2,4,6,8,10,14]
    function powerfulIntegers($x, $y, $bound) {
        //将数据放到两个不同的数组中;
        $x_array=$y_array=[1];
        $x_mult=$x;
        $y_mult=$y;
        while($x!=1&&$x_mult<=$bound){
            $x_array[]=$x_mult;
            $x_mult*=$x;
        }
        while($y!=1&&$y_mult<=$bound){
            $y_array[]=$y_mult;
            $y_mult*=$y;
        }
        $x_count=count($x_array);
        $y_count=count($y_array);
        $result=[];

        for($i=0;$i<$x_count;$i++){
            for($j=0;$j<$y_count;$j++){
                if(($sum=$x_array[$i]+$y_array[$j])<=$bound){
                   in_array($sum,$result) or $result[]=$sum;
                }else{
                    break;
                }
            }
        }
        return $result;
    }
}
$x = 2; $y = 1; $bound = 10;
var_dump((new Solution())->powerfulIntegers($x,$y,$bound));