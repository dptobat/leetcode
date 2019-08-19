<?php

class Solution {
    function transpose($A) {
        $row_count=count($A);
        $column_count=count($A[0]);
        $new_A=[];
        for($i=0;$i<$row_count;$i++){
            for($j=0;$j<$column_count;$j++){
                //将行与列换了;
                $new_A[$j][$i]=$A[$i][$j];
            }
        }
        return $new_A;
    }
}

$A=[[1,2,3],[4,5,6]];
var_dump((new Solution())->transpose($A));