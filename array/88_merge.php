<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    //给定两个有序整数数组 nums1 和 nums2，将 nums2 合并到 nums1 中，使得 num1 成为一个有序数组。
    //
    //说明:
    //
    //初始化 nums1 和 nums2 的元素数量分别为 m 和 n。
    //你可以假设 nums1 有足够的空间（空间大小大于或等于 m + n）来保存 nums2 中的元素。
    //示例:
    //
    //输入:
    //nums1 = [1,2,3,0,0,0], m = 3
    //nums2 = [2,5,6],       n = 3
    //
    //输出: [1,2,2,3,5,6]
    function merge(&$nums1, $m, $nums2, $n) {
        //判断需要移动的位移;
        //$i表示$nums1的下标索引;$j表示的$nums2的下标索引;
        $i=$j=0;
        while($i<$m&&$j<$n){
            $nums1>$nums2?$i++:$j++;

        }

    }
}