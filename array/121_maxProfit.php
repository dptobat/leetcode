<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $price_count=count($prices);
        $start=0;
        $end=1;
        //找最大最小值;
        $min=$prices[$start++];
        $max=$prices[$end];
        while($start<$end){
            if($prices[$start]<$min){
                $min=$prices[$start];
            }
            if($prices[$end]>$max){
//                
            }
        }
    }
}