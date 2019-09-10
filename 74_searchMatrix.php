<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        //根据列之间可以确定在哪一行;使用二分查找;
        $left=0;$right=count($matrix)-1;
        $ans=0;
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($target==$matrix[$mid][0]){
                return true;
            }elseif($target<$matrix[$mid][0]){
                $right=$mid-1;
            }else{
                $ans=$mid;
                $left=$mid+1;
            }
        }

        $left=0;
        $right=count($matrix[0])-1;
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($matrix[$ans][$mid]==$target){
                return true;
            }elseif($matrix[$ans][$mid]<$target){
                $left=$mid+1;
            }else{
                $right=$mid-1;
            }
        }
        return false;
    }
}
$matrix =  [[1,3,5,7],[10,11,16,20],[23,30,34,50]];
$target = 11;

var_dump((new Solution())->searchMatrix($matrix,$target));