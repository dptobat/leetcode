<?php

class Solution {

    /**
     * @param Integer $candies
     * @param Integer $num_people
     * @return Integer[]
     */
    function distributeCandies($candies, $num_people) {
        $ans =array_fill(0,$num_people,0);
        $sum = $now_people = 0;
        while ($candies > 0) {
            $sum++;
            $now = $now_people % $num_people;
            $ans[$now] += min($sum, $candies);
            $now_people++;
            $candies -= $sum;
        }
        return $ans;
    }
}

$candies = 600;
$num_people = 40;
var_dump((new Solution())->distributeCandies($candies, $num_people));
