<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //给定一个包含 n + 1 个整数的数组 nums，其数字都在 1 到 n 之间（包括 1 和 n），可知至少存在一个重复的整数。假设只有一个重复的整数，找出这个重复的数。
    //
    //示例 1:
    //
    //输入: [1,3,4,2,2]
    //输出: 2
    //示例 2:
    //
    //输入: [3,1,3,4,2]
    //输出: 3
    //说明：
    //
    //不能更改原数组（假设数组是只读的）。
    //只能使用额外的 O(1) 的空间。
    //时间复杂度小于 O(n2) 。
    //数组中只有一个重复的数字，但它可能不止重复出现一次。
    function findDuplicate($nums) {
        //先使用快排;
        $nums_count=count($nums);
        $this->quick_sort($nums,0,$nums_count-1);
        for($i=0;$i<$nums_count-1;$i++){
            if($nums[$i]==$nums[$i+1]){
                return $nums[$i];
            }
        }
        return 0;
    }

    function quick_sort(&$nums,$start,$end){
        if($start>=$end)return;
        $partition=$this->partition($nums,$start,$end);
        $this->quick_sort($nums,$start,$partition-1);
        $this->quick_sort($nums,$partition+1,$end);
    }

    function partition(&$nums,$start,$end){
        $base=$nums[$start];
        $start_index=$start;
        while($start<$end){
            while($start<$end&&$nums[$end]>$base){
                $end--;
            }
            while($start<$end&&$nums[$start]<=$base){
                $start++;
            }
            [$nums[$start],$nums[$end]]=[$nums[$end],$nums[$start]];
        }
        [$nums[$start],$nums[$start_index]]=[$nums[$start_index],$nums[$start]];
        return $start;
    }
}
$nums= [3,1,3,4,2];
var_dump((new Solution())->findDuplicate($nums));