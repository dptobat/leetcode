<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arrayPairSum($nums) {
        //就是排好序了之后;
        $nums_count=count($nums);
        $this->quickSort($nums,0,$nums_count-1);
        $sum=0;
        for ($i=0;$i<$nums_count;$i+=2){
            $sum+=$nums[$i];
        }
        return $sum;
    }

    function quickSort(&$nums,$start,$end){
        //第一步找到临界值并将数组分类;
        if($start>=$end)return ;
        $partition_value=$this->partition($nums,$start,$end);
        $this->quickSort($nums,$start,$partition_value-1);
        $this->quickSort($nums,$partition_value+1,$end);
    }
    //写快排，用哨兵，基在前，尾先行，基在尾，头先行，换数据，不可少;
    function partition(&$nums,$start,$end){
        $start_index=$start;
        $base=$nums[$start];
        while($start<$end){
            //将大于和小于的分类;
            //为什么是后端指针先执行;主要是在临界点的时候交换数据;如果是前面指针先走;那么会找到最大的数才停下来，这个时候和start交换的值是比6大的;
            //如果是$base=[$end]就不一样，就需要前面的指针先走;
            while($base<$nums[$end]&&$start<$end){
                $end--;
            }
            //使用>=让基数可以直接到下去;
            while($base>=$nums[$start]&&$start<$end){
                $start++;
            }
            //将数据进行交换;
            if($start<$end){
                [$nums[$end],$nums[$start]]=[$nums[$start],$nums[$end]];
            }
        }
        [$nums[$start],$nums[$start_index]]=[$base,$nums[$start]];
        return $start;
    }
}
$nums=  [1,4,3,2];
var_dump((new Solution())->arrayPairSum($nums));