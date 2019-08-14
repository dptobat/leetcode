<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    /*给定 n 个整数，找出平均数最大且长度为 k 的连续子数组，并输出该最大平均数。

    示例 1:

    输入: [1,12,-5,-6,50,3], k = 4
    输出: 12.75
    解释: 最大平均数 (12-5-6+50)/4 = 51/4 = 12.75
     

    注意:

    1 <= k <= n <= 30,000。
    所给数据范围 [-10,000，10,000]。*/
    //就是依次将间隔大小为4的值进行比较;赋值;只要和是最大，平均数就是最大的;
    function findMaxAverage($nums, $k) {
        //定义一个max的值;
        $max=0;
        //定义一个起始值;
        $nums_count=count($nums);
        for($i=0;$i<$k;$i++){
            $max+=$nums[$i];
        }
        $continuous_num_sum=$max;
        for(;$i<$nums_count;$i++){
            $continuous_num_sum=$continuous_num_sum-$nums[$i-$k]+$nums[$i];
            $max=max($continuous_num_sum,$max);
        }
        return $max/$k;
    }
}
$nums= [1,12,-5,-6,50,3]; $k = 4;

var_dump( (new Solution())->findMaxAverage($nums,$k));