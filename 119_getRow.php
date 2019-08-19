<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
        //定义结果数组,定义每组数据数组
        function getRow($rowIndex) {
            //定义结果数组,定义每组数据数组
            if ($rowIndex == 0) return [1];
            if ($rowIndex == 1) return  [1, 1];
            $last_result = [1, 1];
            for ($i = 2; $i <= $rowIndex; $i++) {
                $last_count = count($last_result);
                $row_result = [];
                $row_result[] = 1;
                for ($j = 0; $j < $last_count - 1; $j++) {
                    $row_result[] = $last_result[$j] + $last_result[$j + 1];
                }
                $row_result[] = 1;
                $last_result = $row_result;
            }
            return $row_result;
        }
}
$rowIndex = 3;
var_dump((new Solution())->getRow($rowIndex));