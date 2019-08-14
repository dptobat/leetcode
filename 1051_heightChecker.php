<?php

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    //学校在拍年度纪念照时，一般要求学生按照 非递减 的高度顺序排列。
    //
    //请你返回至少有多少个学生没有站在正确位置数量。该人数指的是：能让所有学生以 非递减 高度排列的必要移动人数。
    //
    // 
    //
    //示例：
    //
    //输入：[1,1,4,2,1,3]
    //输出：3
    //解释：
    //高度为 4、3 和最后一个 1 的学生，没有站在正确的位置。
    function heightChecker($heights) {
        //排序后比较;
        $last_heights = $heights;
        $heights_count = count($heights);
        $this->quickSort($heights, 0, $heights_count - 1);
        $count = 0;
        for ($i = 0; $i < $heights_count; $i++) {
            if ($last_heights[$i] == $heights[$i]) {
                continue;
            }
            $count++;
        }
        return $count;
    }

    function quickSort(&$arr, $start, $end) {
        if ($start >= $end) return;
        $partition = $this->partition($arr, $start, $end);
        $this->quickSort($arr, $start, $partition - 1);
        $this->quickSort($arr, $partition + 1, $end);
    }

    function partition(&$arr, $start, $end) {
        //选取头尾都可以;
        $base = $arr[$end];
        $end_index = $end;
        while ($start < $end) {
            while ($base > $arr[$start] && $start < $end) {
                $start++;
            }
            while ($base <= $arr[$end] && $start < $end) {
                $end--;
            }
            //这里应该交换数据;
            [$arr[$start], $arr[$end]] = [$arr[$end], $arr[$start]];
        }
        //这里交换基础数据;
        [$arr[$start], $arr[$end_index]] = [$arr[$end_index], $arr[$start]];
        return $start;
    }
}

$heights = [1, 1, 4, 2, 1, 3];
var_dump((new Solution())->heightChecker($heights));