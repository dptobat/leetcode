<?php

class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    //给定一个数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。
    //
    //candidates 中的每个数字在每个组合中只能使用一次。
    //
    //说明：
    //
    //所有数字（包括目标数）都是正整数。
    //解集不能包含重复的组合。 
    //示例 1:
    //
    //输入: candidates = [10,1,2,7,6,1,5], target = 8,
    //所求解集为:
    //[
    //  [1, 7],
    //  [1, 2, 5],
    //  [2, 6],
    //  [1, 1, 6]
    //]
    //示例 2:
    //
    //输入: candidates = [2,5,2,1,2], target = 5,
    //所求解集为:
    //[
    //  [1,2,2],
    //  [5]
    //]
    function combinationSum2($candidates, $target) {
        $candidates_count=count($candidates);
        sort($candidates);
        $result=[];
        $this->def($candidates,0,$candidates_count,$target,[],$result);
        return $result;
    }

    function def($candidates,$start,$candidates_count,$target,$path,&$result){
        if($target==0){
            $result[]=$path;
        }
        for($i=$start;$i<$candidates_count;$i++){
            if ( $i != $start &&$candidates[$i] == $candidates[$i-1]) continue;
            if($candidates[$i]>$target)return;
            $diff=$target-$candidates[$i];
            if($diff<0){
                return ;
            }
            $path[]=$candidates[$i];
            $this->def($candidates,$i+1,$candidates_count,$diff,$path,$result);
            array_pop($path);
        }
    }
}
$candidates =[2,5,2,1,2]; $target = 5;
var_dump((new Solution())->combinationSum2($candidates,$target));