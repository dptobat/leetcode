<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //给定一个包含非负整数的数组，你的任务是统计其中可以组成三角形三条边的三元组个数。
    //
    //示例 1:
    //
    //输入: [2,2,3,4]
    //输出: 3
    //解释:
    //有效的组合是:
    //2,3,4 (使用第一个 2)
    //2,3,4 (使用第二个 2)
    //2,2,3
    //注意:
    //
    //数组长度不超过1000。
    //数组里整数的范围为 [0, 1000]。

    function triangleNumber($nums) {
        $res=0;
        sort($nums);
        $nums_count=count($nums);
        for($i=$nums_count-1;$i>1;$i--){
                $j=0;
                $k=$i-1;
                while($j<$k){
                    if($nums[$k]+$nums[$j]>$nums[$i]){
                        $res+=$k-$j;$k--;
                    }else{
                        $j++;
                    }
                }
            }
        return $res;
    }
}
$nums=[2,2,3,4];
var_dump((new Solution())->triangleNumber($nums));