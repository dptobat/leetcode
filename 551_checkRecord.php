<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        $s_length=strlen($s);
        //只要超过了一个A或者超过了两个连续的'L'就不能奖励
        $continuous_l=0;
        $a_flag=false;
        for($i=0;$i<$s_length;$i++){
            if($s[$i]=='L'){
                $continuous_l++;
                if($continuous_l>2){
                    return false;
                }
            }else {
                $continuous_l = 0;
                if ($s[$i] == 'A') {
                    if($a_flag){
                        return false;
                    }
                    $a_flag = true;
                }
            }
        }
        return true;
    }
}
$s='PPALLL';
var_dump((new Solution())->checkRecord($s));