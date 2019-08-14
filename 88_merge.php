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
        //倒着进行比较;
        $end = $m-- + $n-- - 1;
        while ($m >= 0 && $n >= 0) {
            $nums1[$end--]=$nums1[$m]>$nums2[$n]?$nums1[$m--]:$nums2[$n--];
        }
        //还需要将剩下的数据批量的赋值过去;
        while($n>=0){
            $nums1[$end--]=$nums2[$n--];
        }
    }
//下面是自己写的,没有别人的简洁;
/*    function merge(&$nums1, $m, $nums2, $n) {
        if ($m == 0) $nums1 = $nums2;
        $end = $m + $n - 1;
        $i = $m - 1;
        $j = $n - 1;
        while ($i >= 0 && $j >= 0) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$end] = $nums1[$i];
                $i--;
            } else {
                $nums1[$end] = $nums2[$j];
                $j--;
            }
            $end--;
        }
        //还需要将剩下的数据批量的赋值过去;
        while($j>=0){
            $nums1[$j]=$nums2[$j];
            $j--;
        }
    }
*/

}

$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

(new Solution())->merge($nums1, $m, $nums2, $n);
var_dump($nums1);