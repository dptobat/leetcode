<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
        //定义头尾指针，相互交换;
        $i=0;
        $j=count($A)-1;
        while($i<$j){
            while($A[$i]%2==0&&$i<$j){
                $i++;
            }
            while($A[$j]%2!=0&&$i<$j){
                $j--;
            }
            //交换两个元素;
            //可能$i和$j相等;其实就不用交换了
            [$A[$i],$A[$j]]=[$A[$j],$A[$i]];
            $j--;$i++;
        }
        return $A;
    }
}
$A=[3,1,2,4,21,4,1,12,53,432,12,12,435,1];
var_dump((new Solution())->sortArrayByParity($A));