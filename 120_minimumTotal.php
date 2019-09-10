<?php

class Solution {

    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle) {
        //动态规划;
        $row = count($triangle);
        //状态转移方程:dp[$i][$j]=min($dp[$i-1][$j],$dp[$i-1][$j-1]);如果遇到$dp[$i-1][$j],$dp[$i-1][$j-1]有一个不存在的情况就选择其他的;
        $dp[0][0] = $triangle[0][0];
        for ($i = 1; $i < $row; $i++) {
            $col = count($triangle[$i]);
            for ($j = 0; $j < $col; $j++) {
                $dp[$i][$j] = $triangle[$i][$j]+min($dp[$i - 1][$j]??PHP_INT_MAX, $dp[$i - 1][$j-1]??PHP_INT_MAX);
            }
        }
        //找最后一行的最小值;
        $count=$i;
        $min=PHP_INT_MAX;
        for($i=0;$i<$count;$i++){
            $min=min($dp[$row-1][$i],$min);
        }
        return $min;
    }
}

$triangle=[
    [2],
    [3,4],
    [6,5,7],
    [4,1,8,3]
];
var_dump((new Solution())->minimumTotal($triangle));