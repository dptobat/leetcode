<?php


class Solution {

    /**
     * @param Integer $s
     * @param Integer[] $nums
     * @return Integer
     */
    //给定一个含有 n 个正整数的数组和一个正整数 s ，找出该数组中满足其和 ≥ s 的长度最小的连续子数组。如果不存在符合条件的连续子数组，返回 0。
    //
    //示例: 
    //
    //输入: s = 7, nums = [2,3,1,2,4,3]
    //输出: 2
    //解释: 子数组 [4,3] 是该条件下的长度最小的连续子数组。
    //进阶:
    //
    //如果你已经完成了O(n) 时间复杂度的解法, 请尝试 O(n log n) 时间复杂度的解法。
    //

    function minSubArrayLen($s, $nums) {
        //
        $nums_count = count($nums);
        $sum=0;
        $min=PHP_INT_MAX;
        $sum_array=[];
        $start_index=-1;
        for ($i = 0; $i < $nums_count; $i++) {
            if($nums[$i]>=$s)return 1;
            $sum+=$nums[$i];
            $sum_array[$i]=$sum;
            if($sum>=$s){
                //使用二分查找最接近$sum_array[$sum-$s]
                $left=0;$right=$i;$target=$sum-$s;
                while($left<=$right){
                    $mid=$left+(($right-$left)>>1);
                    if($sum_array[$mid]==$target){
                        $start_index=$mid;break;
                    }
                    if($sum_array[$mid]>$target){
                        $right=$mid-1;
                    }else{
                        $start_index=$mid;
                        $left=$mid+1;
                    }
                }
                $min=min($i-$start_index,$min);
            }
        }
        return $sum<$s?0:$min;
    }
}
$s=0; $nums =   [2,5,3,1,2,4,1];
var_dump((new Solution())->minSubArrayLen($s,$nums));