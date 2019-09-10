<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $nums_count=count($nums);
        $res=[];
        $this->dsf($nums_count,$nums,$res,[]);
        return $res;
    }

    function dsf($nums_count,$num,&$res,$path){
        if(count($path)==$nums_count){
            $res[]=$path;
            return ;
        }
        for($i=0;$i<$nums_count;$i++){
            if(in_array($num[$i],$path)){continue;}
            $path[]=$num[$i];
            $this->dsf($nums_count,$num,$res,$path);
            array_pop($path);
        }
    }
}
$nums=[1,2,3,4];
var_dump((new Solution())->permute($nums));