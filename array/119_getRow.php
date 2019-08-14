<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        //定义结果数组,定义每组数据数组
        if ($numRows == 0) return [[1]];
        if ($numRows == 1) return [[1], [1, 1]];
        $last_result = [1, 1];
        for ($i = 2; $i <= $numRows; $i++) {
            $last_count = count($last_result);
            $row_result = [];
            $row_result[] = 1;
            for ($j = 0; $j < $last_count - 1; $j++) {
                $row_result[] = $last_result[$j] + $last_result[$j + 1];
            }
            $row_result[] = 1;
            $last_result = $row_result;
        }
        $result=[];
        foreach ($last_result as $value){
            $result[]=$value;
        }
        return $result;
    }
}
$numRows = 3;
print_r((new Solution())->generate($numRows));