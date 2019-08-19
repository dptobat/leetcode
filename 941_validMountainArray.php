<?php


class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function validMountainArray($A) {
        $A_count=count($A);
        if($A[1]-$A[0]<=0) return false;
        $flag=1;
        for($i=1;$i<$A_count;$i++){
            if($A[$i]-$A[$i-1]==0)return false;
            if(($A[$i]-$A[$i-1])*$flag<0) {
                if($flag==1){
                    $flag = -1;
                }else{
                    return false;
                }
            }
        }
        return $flag==-1;
    }
}
$A=[14,82,89,84,79,70,70,68,67,66,63,60,58,54,44,43,32,28,26,25,22,15,13,12,10,8,7,5,4,3];
var_dump((new Solution())->validMountainArray($A));