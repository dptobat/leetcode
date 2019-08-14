<?php

class Solution {

    /**
     * @param String $S
     * @return String
     */
    function removeDuplicates($S) {
        //创建一个delete_array
        $S_length=strlen($S);



        $result_str='';

        for($i=0;$i<$S_length;$i++){
            if(isset($delete_array[$i])){
                continue;
            }
            $result_str.=$S[$i];
        }
        return $result_str;
    }
}

$S="aabbccddea";
var_dump((new Solution())->removeDuplicates($S));