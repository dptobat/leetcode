<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */

    function rotate(&$matrix) {
        //先将矩阵上下翻转，然后在对角线翻转;
        $i=0;
        $col=count($matrix);
        $row=count($matrix[0]);
        $j=$col-1;
        //上下翻转;
        while($i<$j){
            for($k=0;$k<$row;$k++){
                [$matrix[$i][$k],$matrix[$j][$k]]=[$matrix[$j][$k],$matrix[$i][$k]];
            }
            $i++;$j--;
        }
        //对角线翻转;
        for($i=0;$i<$col-1;$i++){
            for($j=$i+1;$j<$row;$j++){
                [$matrix[$i][$j],$matrix[$j][$i]]=[$matrix[$j][$i],$matrix[$i][$j]];
            }
        }
        return $matrix;
    }
}
$matrix=[
    [ 5, 1, 9,11],
    [ 2, 4, 8,10],
    [13, 3, 6, 7],
    [15,14,12,16]
];
var_dump((new Solution())->rotate($matrix));