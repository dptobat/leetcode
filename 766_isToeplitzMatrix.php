<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    //如果一个矩阵的每一方向由左上到右下的对角线上具有相同元素，那么这个矩阵是托普利茨矩阵。
    //
    //给定一个 M x N 的矩阵，当且仅当它是托普利茨矩阵时返回 True。
    //
    //示例 1:
    //
    //输入:
    //matrix = [
    //  [1,2,3,4],
    //  [5,1,2,3],
    //  [9,5,1,2]
    //]
    //输出: True
    //解释:
    //在上述矩阵中, 其对角线为:
    //"[9]", "[5, 5]", "[1, 1, 1]", "[2, 2, 2]", "[3, 3]", "[4]"。
    //各条对角线上的所有元素均相同, 因此答案是True。
    //示例 2:
    //
    //输入:
    //matrix = [
    //  [1,2],
    //  [2,2]
    //]
    //输出: False
    //解释:
    //对角线"[1, 2]"上的元素不同。

    function isToeplitzMatrix($matrix) {
        $row=count($matrix);
        $i=0;
        $column=count($matrix[0]);
        $j=0;
        while($j<$i){
            $matrix[$i][$j];
        }
    }
}