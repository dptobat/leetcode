<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $s_length=strlen($s);
        //定义一个二维数组去记录状态;
        $dp=[];
        $left=$right=0;
        for($i=0;$i<$s_length;$i++){
            $dp[$i][$i]=true;
            for($j=$i-1;$j>=0;$j--){
                $dp[$i][$j]=$s[$i]==$s[$j]&&($i-$j<2||$dp[$i-1][$j+1]);
                if($dp[$i][$j]&&$i-$j>$right-$left){
                    $left=$j;
                    $right=$i;
                }
            }
        }
        return substr($s,$left,$right-$left+1);
    }
}

$s='babad';
var_dump((new Solution())->longestPalindrome($s));