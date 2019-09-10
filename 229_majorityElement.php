<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function majorityElement($nums) {
        //摩尔投票法;
        //大于n/3的不会超过两个;
        $nums_count = count($nums);
        //选举出两个出现次数最多的;
        $A=$B=$countA=$countB = 0;
        for ($i = 0; $i < $nums_count; $i++) {
            if ($countA == 0&&$B!=$nums[$i]) {
                $A = $nums[$i];
                $countA++;
                continue;
            }
            if ($A == $nums[$i]) {
                $countA++;
                continue;
            }
            if ($countB == 0&&$A!=$nums[$i]) {
                $B = $nums[$i];
                $countB++;
                continue;
            }
            if ($B == $nums[$i]) {
                $countB++;
                continue;
            }
            $countA--;
            $countB--;
        }
//        var_dump($A,$B);exit;
        //针对选举出来的然后在进行判断;
        $countA = $countB = 0;
        for ($i = 0; $i < $nums_count; $i++) {
            if ($nums[$i] == $A) {
                $countA++;
            } elseif ($nums[$i] == $B) {
                $countB++;
            }
        }
        $res=[];
        //判断countA和countB是不是大于n/3;
        $countA > $nums_count / 3 && $res[] = $A;
        $countB > $nums_count / 3 && $res[] = $B;
        return $res;
    }
}

$nums = [1,2,2,3,2,1,1,3];
var_dump((new Solution())->majorityElement($nums));