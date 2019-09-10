<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $row = count($matrix);
        $col = count($matrix[0]);
        $modify_col = [];
        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                //找到0所在的行，记录下来;
                if ($matrix[$i][$j] == 0) {
                    $modify_row[] = $i;
                    $modify_col[] = $j;
                }
            }
        }

        for ($i = 0; $i < $row; $i++) {
            for ($j = 0; $j < $col; $j++) {
                if (in_array($i, $modify_row) || in_array($j, $modify_col)) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
        return $matrix;
    }
}
$matrix=[
    [1,1,1],
    [1,0,1],
    [1,1,1]
];
var_dump((new Solution())->setZeroes($matrix));