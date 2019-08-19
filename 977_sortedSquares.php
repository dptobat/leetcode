<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortedSquares($A) {
        //头尾比较
        //定义一个新的数组存储;
        $A_count=count($A);
        $i=0;
        $k=$j=$A_count-1;
        $square_array=array_fill(0,$j,0);
        while($i<=$j){
            $square_i=$A[$i]*$A[$i];
            $square_j=$A[$j]*$A[$j];
            if($square_i>$square_j){
                $square_array[$k]=$square_i;
                $i++;
            }else{
                $square_array[$k]=$square_j;
                $j--;
            }
            $k--;
        }
        //这样square_array是一个的倒叙的;
        return $square_array;
    }

}
$A=[-7,-3,2,3,11];
var_dump((new Solution())->sortedSquares($A));