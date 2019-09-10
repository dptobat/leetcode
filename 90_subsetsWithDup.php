<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    //给定一个可能包含重复元素的整数数组 nums，返回该数组所有可能的子集（幂集）。
    //
    //说明：解集不能包含重复的子集。
    //
    //示例:
    //
    //输入: [1,2,2]
    //输出:
    //[
    //  [2],
    //  [1],
    //  [1,2,2],
    //  [2,2],
    //  [1,2],
    //  []
    //]
    function subsetsWithDup($nums) {
        $nums_count=count($nums);
        sort($nums);
        $result=[];
        $this->def($nums,0,$nums_count,$result,[]);
        return $result;
    }

    function  def($nums,$start,$nums_count,&$result,$path){
        $result[]=$path;
        for($i=$start;$i<$nums_count;$i++){
            if($i!=$start&&$nums[$i-1]==$nums[$i])continue;
            $path[]=$nums[$i];
            $this->def($nums,$i+1,$nums_count,$result,$path);
            array_pop($path);
        }
    }
}
$nums=[1,2,2];
var_dump((new Solution())->subsetsWithDup($nums));