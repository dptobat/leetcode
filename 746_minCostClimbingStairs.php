<?php

class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     */
//数组的每个索引做为一个阶梯，第 i个阶梯对应着一个非负数的体力花费值 cost[i](索引从0开始)。
//
//每当你爬上一个阶梯你都要花费对应的体力花费值，然后你可以选择继续爬一个阶梯或者爬两个阶梯。
//
//您需要找到达到楼层顶部的最低花费。在开始时，你可以选择从索引为 0 或 1 的元素作为初始阶梯。
//
//示例 1:
//
//输入: cost = [10, 15, 20]
//输出: 15
//解释: 最低花费是从cost[1]开始，然后走两步即可到阶梯顶，一共花费15。
// 示例 2:
//
//输入: cost = [1, 100, 1, 1, 1, 100, 1, 1, 100, 1]
//输出: 6
//解释: 最低花费方式是从cost[0]开始，逐个经过那些1，跳过cost[3]，一共花费6。

    function minCostClimbingStairs($cost) {
        //动态规划;
        //cost=min(n+Min_n_2,n+Min_n_1)
        $dp[0]=$cost[0];
        $dp[1]=$cost[1];
        $cost_count=count($cost);
        for($i=2;$i<$cost_count;$i++){
            $dp[$i]=min($dp[$i-1]+$cost[$i],$cost[$i]+$dp[$i-2]);
        }
        //最后就是比较dp[$i]和dp[$i-1]的值;
        return min($dp[$i-1],$dp[$i-2]);
    }
}
$cost=[1, 100, 1, 1, 1, 100, 1, 1, 100, 1];
var_dump((new Solution())->minCostClimbingStairs($cost));