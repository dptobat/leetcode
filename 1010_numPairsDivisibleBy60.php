<?php


class Solution {

    /**
     * @param Integer[] $time
     * @return Integer
     */
    function numPairsDivisibleBy60($time) {
        $time_count = count($time);
        $times = 0;
        for ($i = 0; $i < $time_count - 1; $i++) {
            for ($j = $i + 1; $j < $time_count; $j++) {
                if (($time[$i] + $time[$j]) % 60 === 0) {
                    $times++;
                }
            }
        }
        return $times;
    }
}

$time = [60, 60, 60];
var_dump((new Solution())->numPairsDivisibleBy60($time));