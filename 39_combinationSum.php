<?php

class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    //给定一个无重复元素的数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。
    //
    //candidates 中的数字可以无限制重复被选取。
    //
    //说明：
    //
    //所有数字（包括 target）都是正整数。
    //解集不能包含重复的组合。 
    //示例 1:
    //
    //输入: candidates = [2,3,6,7], target = 7,
    //所求解集为:
    //[
    //  [7],
    //  [2,2,3]
    //]
    //示例 2:
    //
    //输入: candidates = [2,3,5], target = 8,
    //所求解集为:
    //[
    //  [2,2,2,2],
    //  [2,3,3],
    //  [3,5]
    //]

    function combinationSum($candidates, $target) {
        $candidates_count=count($candidates);
        //说明找到了正确的答案
        if($candidates==0){
            return [];
        }
        sort($candidates);
        $path=[];
        $res=[];
        $this->def($candidates,0,$candidates_count,$path,$res,$target);
        return $res;
    }

    function def($candidates,$start,$candidates_count,$path,&$res,$target){
        if($target==0){
            //添加到结果集;
            $res[]=$path;
            return ;
        }
        for($i=$start;$i<$candidates_count;$i++){
            $diff=$target-$candidates[$i];
            //进行剪枝操作;因为是排序的所以不用管下面的了;
            if($diff<0){
                break;
            }
            $path[]=$candidates[$i];
            $this->def($candidates,$i,$candidates_count,$path,$res,$diff);
            array_pop($path);
        }
    }
}
$candidates=[2,3,6,7];$target=7;
var_dump((new Solution())->combinationSum($candidates,$target));