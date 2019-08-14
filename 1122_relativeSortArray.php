<?php

class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {
        //根据$arr2编写一个排序函数;
        $arr2_count = count($arr2);
        $sort_rules = [];
        for ($i = 0; $i < $arr2_count; $i++) {
            $sort_rules[$arr2[$i]] = -($arr2_count-$i);
        }
        //使用快速排序;
        $this->quickSort($arr1, 0, count($arr1)-1, $sort_rules);
        return $arr1;
    }

    function quickSort(&$arr1, $start, $end, $sort_rules) {
        //如果start>end就不用排序了;
        if ($start >= $end) return;
        $mid = $this->partition($arr1, $start, $end, $sort_rules);
        $this->quickSort($arr1, $start, $mid - 1, $sort_rules);
        $this->quickSort($arr1, $mid + 1, $end, $sort_rules);
    }

    function partition(&$arr1, $start, $end, $sort_rules) {
        $base = $sort_rules[$arr1[$end]] ?? $arr1[$end];
        $end_index = $end;
        while ($start < $end) {
            while (($sort_rules[$arr1[$start]] ?? $arr1[$start]) < $base && $start < $end) {
                $start++;
            }
            while (($sort_rules[$arr1[$end]] ?? $arr1[$end]) >= $base && $start < $end) {
                $end--;
            }
            //将数据进行交换;
            [$arr1[$start], $arr1[$end]] = [$arr1[$end], $arr1[$start]];
        }
        [$arr1[$start],$arr1[$end_index]]=[$arr1[$end_index],$arr1[$start]];
        return $start;
    }
}

$arr1 = [2, 3, 1, 3, 2, 4, 6, 7, 9, 2, 19];
$arr2 = [2, 1, 4, 3, 9, 6];
var_dump((new Solution())->relativeSortArray($arr1, $arr2));