<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    //给定一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？找出所有满足条件且不重复的三元组。
    //
    //注意：答案中不可以包含重复的三元组。
    //
    //例如, 给定数组 nums = [-1, 0, 1, 2, -1, -4]，
    //
    //满足要求的三元组集合为：
    //[
    //  [-1, 0, 1],
    //  [-1, -1, 2]
    //]

    function threeSum($nums) {
        //先将数组排序;
        sort($nums);
        $nums_count = count($nums);
        $result = [];
        //从小到大遍历;
        for ($k = 0; $k < $nums_count; $k++) {
            $i = 0;
            $j = $nums_count - 1;
            while ($i < $j) {
                $sum = $nums[$j] + $nums[$i]+$nums[$k];
                if ($k != $i && $k != $j && $sum == 0) {
                    //记录一下;
                    $min = $nums[$i];
                    $mid = $nums[$k];
                    $max = $nums[$j];
                    if ($i > $k) {
                        [$min, $mid] = [$mid, $min];
                    }
                    if ($k > $j) {
                        [$mid, $max] = [$max, $mid];
                    }
                    if (empty($record[$min][$mid][$max])) {
                        $result[] = [$min, $mid, $max];
                    }
                    $record[$min][$mid][$max] = 1;
                }
                if ($sum > 0) {
                    $j--;
                } else {
                    $i++;
                }
            }
        }
        return $result;
    }
}

$nums =  [-1, 0, 1, 2, -1, -4];
var_dump((new Solution())->threeSum($nums));