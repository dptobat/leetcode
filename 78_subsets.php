<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        $result=[];
        $nums_count=count($nums);
        sort($nums);
        $this->def($nums,0,$nums_count,$result,[]);
        return $result;
    }

    //递归添加子集
    function def($nums,$start,$nums_count,&$result,$temp){
            $result[]=$temp;
            for($i=$start;$i<$nums_count;$i++){
                $temp[]=$nums[$i];
                $this->def($nums,$i+1,$nums_count,$result,$temp);
                array_pop($temp);
            }
    }
}
$nums=[1,2,3];
var_dump((new Solution())->subsets($nums));