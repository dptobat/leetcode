<?php

class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function flipAndInvertImage($A) {
        $row_count=count($A);
        $column_count=count($A[0]);
        for($i=0;$i<$row_count;$i++){
            $j=0;$k=$column_count-1;
            while($j<=$k){
                [$A[$i][$j],$A[$i][$k]]=[(int)(!$A[$i][$k]),(int)(!$A[$i][$j])];
                $j++;$k--;
            }
        }
        return $A;
    }
}
$A= [[1,1,0,0],[1,0,0,1],[0,1,1,1],[1,0,1,0]];
var_dump((new Solution())->flipAndInvertImage($A));