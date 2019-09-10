<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    //假设按照升序排序的数组在预先未知的某个点上进行了旋转。
    //
    //( 例如，数组 [0,1,2,4,5,6,7] 可能变为 [4,5,6,7,0,1,2] )。
    //
    //搜索一个给定的目标值，如果数组中存在这个目标值，则返回它的索引，否则返回 -1 。
    //
    //你可以假设数组中不存在重复的元素。
    //
    //你的算法时间复杂度必须是 O(log n) 级别。
    //
    //示例 1:
    //
    //输入: nums = [4,5,6,7,0,1,2], target = 0
    //输出: 4
    //示例 2:
    //
    //输入: nums = [4,5,6,7,0,1,2], target = 3
    //输出: -1
    function search($nums, $target) {
        //二分查找的变形，每次都要比较target和头尾的大小;
        $nums_count=count($nums);
        //判断那一边是有序的;
        $left=0;
        $right=$nums_count-1;
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($nums[$mid]==$target){
                return $mid;
            }
            if($target==$nums[$right]){
                return $right;
            }
            if($target==$nums[$left]){
                return $left;
            }
            if($target>$nums[$mid]){
                //判断一遍有序;
                if($nums[$mid]<$nums[$left]&&$target>$nums[$left]){
                    $right=$mid-1;
                }else{
                    $left=$mid+1;
                }
            }else{
                if($nums[$mid]>$nums[$right]&&$target<$nums[$right]){
                    $left=$mid+1;
                }else{
                    $right=$mid-1;
                }
            }
        }
        return -1;
    }
}

$nums =[1,3,4,5,0];$target =3;
var_dump((new Solution())->search($nums,$target));