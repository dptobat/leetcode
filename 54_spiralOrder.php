<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    //给定一个包含 m x n 个元素的矩阵（m 行, n 列），请按照顺时针螺旋顺序，返回矩阵中的所有元素。
    //
    //示例 1:
    //
    //输入:
    //[
    // [ 1, 2, 3 ],
    // [ 4, 5, 6 ],
    // [ 7, 8, 9 ]
    //]
    //输出: [1,2,3,6,9,8,7,4,5]
    //示例 2:
    //
    //输入:
    //[
    //  [1, 2, 3, 4],
    //  [5, 6, 7, 8],
    //  [9,10,11,12]
    //]
    //输出: [1,2,3,4,8,12,11,10,9,5,6,7]
    function spiralOrder($matrix) {
        $row=count($matrix);
        $col=count($matrix[0]);
        $new_matrix=[];
        $time=ceil($row/2);
        $up=0;$down=$row-1;$left=0;$right=$col-1;
        for($i=0;$i<$time;$i++){
            for($j=$left;$j<=$right;$j++){
                $new_matrix[]=$matrix[$up][$j];
            }
            if(++$up>$down)break;
            for($j=$up;$j<=$down;$j++){
                $new_matrix[]=$matrix[$j][$right];
            }
            if(--$right<$left)break;
            for($j=$right;$j>=$left;$j--){
                $new_matrix[]=$matrix[$down][$j];
            }
            if(--$down<$up)break;
            for($j=$down;$j>=$up;$j--){
                $new_matrix[]=$matrix[$j][$left];
            }
            if(++$left>$right)break;
        }
        return $new_matrix;
    }
}
$matrix=[
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9,10,11,12]
];
var_dump((new Solution())->spiralOrder($matrix));