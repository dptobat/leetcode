<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    //实现获取下一个排列的函数，算法需要将给定数字序列重新排列成字典序中下一个更大的排列。
    //
    //如果不存在下一个更大的排列，则将数字重新排列成最小的排列（即升序排列）。
    //
    //必须原地修改，只允许使用额外常数空间。
    //
    //以下是一些例子，输入位于左侧列，其相应输出位于右侧列。
    //1,2,3 → 1,3,2
    //3,2,1 → 1,2,3
    //1,1,5 → 1,5,1
    function nextPermutation(&$nums) {
        //倒过来循环;
        $nums_count=count($nums);
        for($i=$nums_count-1;$i>0;$i--){
            if($nums[$i]>$nums[$i-1]){
               //从剩下的数中找到最小的但是大于$num[$i-1]的数;之后就return;
                $this->quickSort($nums,$i,$nums_count-1);
                //找到第一个大于$nums[$i-1]的数和$nums[$i-1]交换;
                for($j=$i;$j<$nums_count;$j++){
                    if($nums[$j]>$nums[$i-1]){
                        [$nums[$j],$nums[$i-1]]=[$nums[$i-1],$nums[$j]];
                        return $nums;
                    }
                }
            }
        }
        //到了这里说明需要倒序;
        $i=0;$j=$nums_count-1;
        while($i<$j){
            [$nums[$i],$nums[$j]]=[$nums[$j],$nums[$i]];
            $i++;$j--;
        }
        return $nums;
    }
    function quickSort(&$nums,$start,$end){
        if($start>=$end)return;
        $partition=$this->partition($nums,$start,$end);
        $this->quickSort($nums,$start,$partition-1);
        $this->quickSort($nums,$partition+1,$end);
    }
    function partition(&$nums,$start,$end){
        $base=$nums[$start];
        $start_index=$start;
        while($start<$end){
            while($nums[$end]>$base&&$start<$end){
                $end--;
            }
            while($nums[$start]<=$base&&$start<$end){
                $start++;
            }
            [$nums[$start],$nums[$end]]=[$nums[$end],$nums[$start]];

        }
        [$nums[$start_index],$nums[$start]]=[$nums[$start],$nums[$start_index]];
        return $start;
    }
}

$nums=[1,1,5];
var_dump((new Solution())->nextPermutation($nums));