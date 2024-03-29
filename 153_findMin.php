<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //假设按照升序排序的数组在预先未知的某个点上进行了旋转。
    //
    //( 例如，数组 [0,1,2,4,5,6,7] 可能变为 [4,5,6,7,0,1,2] )。
    //
    //请找出其中最小的元素。
    //
    //你可以假设数组中不存在重复元素。
    //
    //示例 1:
    //
    //输入: [3,4,5,1,2]
    //输出: 1
    //示例 2:
    //
    //输入: [4,5,6,7,0,1,2]
    //输出: 0
    //其实就是找旋转点吧;
    function findMin($nums) {
        $left=0;
        $right=count($nums)-1;
        if($nums[$right]>=$nums[$left])return $nums[$left];
        while($left<=$right){
            //找到没有升序的那一段;
            if($left==$right)return $nums[$left+1];
            $mid=$left+(($right-$left)>>1);
            if($nums[$mid]>$nums[$left]){
                $left=$mid;
            }else{
                $right=$mid;
            }
        }
        return $nums[$mid+1];
    }
}
$nums=[1,2];
var_dump((new Solution())->findMin($nums));