<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permuteUnique($nums) {
        $nums_count = count($nums);
        sort($nums);
        $res = [];
        $this->dsf($nums_count,$nums, $res, [],[]);
        return $res;
    }

    function dsf($nums_count,$nums, &$res, $path,$visited) {
        if (count($path) == $nums_count) {
            $res[] = $path;
            return;
        }
        for ($i = 0; $i < $nums_count; $i++) {
            if((isset($visited[$i])&&$visited[$i]==1)||($i!=0&&$nums[$i-1]==$nums[$i]&&$visited[$i-1]==1)){
                continue;
            }
            $path[] = $nums[$i];
            $visited[$i]=1;
            $this->dsf($nums_count, $nums, $res, $path,$visited);
            $visited[$i]=0;
            array_pop($path);
        }
    }
}
$nums=[1,2,3];
var_dump((new Solution())->permuteUnique($nums));