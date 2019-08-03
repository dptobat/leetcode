<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $price_count=count($prices);
        $min_buy=$prices[0];
        $max_profit=0;
        //动态规划问题：$max_profit=max{$prices[$i]-最小的一天购买值,前i-1天的最大利润}
        for($i=1;$i<$price_count;$i++){
            $max_profit=max($max_profit,$prices[$i]-$min_buy);
            $min_buy=min($min_buy,$prices[$i]);
        }
        return $max_profit;
    }
}
$prices=[7,1,5,3,6,4];
var_dump((new Solution())->maxProfit($prices));