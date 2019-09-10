<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     */
    //给定一个整数数组 A，对于每个整数 A[i]，我们可以选择任意 x 满足 -K <= x <= K，并将 x 加到 A[i] 中。
    //
    //在此过程之后，我们得到一些数组 B。
    //
    //返回 B 的最大值和 B 的最小值之间可能存在的最小差值。
    //
    // 
    //
    //示例 1：
    //
    //输入：A = [1], K = 0
    //输出：0
    //解释：B = [1]
    //示例 2：
    //
    //输入：A = [0,10], K = 2
    //输出：6
    //解释：B = [2,8]
    //示例 3：
    //
    //输入：A = [1,3,6], K = 3
    //输出：0
    //解释：B = [3,3,3] 或 B = [4,4,4]

    function smallestRangeI($A, $K) {
        //找到A中的最小值最大值；
        $a_count=count($A);
        $min=$max=$A[0];
        for($i=1;$i<$a_count;$i++){
            $min=min($min,$A[$i]);
            $max=max($max,$A[$i]);
        }
        //求$max和$min的平均数；大家都往平均数上靠就可以缩小差值;
        $mid=(($max-$min)>>1)+$min;
        //判断$k是否可以让$min或$mid达到平均值;
        $min=min($min+$K,$mid);
        $max=max($max-$K,$mid);
        return  $max-$min;
    }
}
$A=[1,3,6];$k=3;
var_dump((new Solution())->smallestRangeI($A,$k));