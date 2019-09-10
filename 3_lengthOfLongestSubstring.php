<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $s_length=strlen($s);
        $count=0;
        $record=[];
        $max=0;
        $start_index=0;
        for($i=0;$i<$s_length;$i++){
            if(isset($record[$s[$i]])&&$start_index<=$record[$s[$i]]){
               $max=max($max,$count);$count=$i-$record[$s[$i]];$start_index=$record[$s[$i]]+1;$record[$s[$i]]=$i;
            }else{
                $record[$s[$i]]=$i;
                ++$count;
            }
        }
        return max($count,$max);
    }
}
$s="aab";
var_dump((new Solution())->lengthOfLongestSubstring($s));