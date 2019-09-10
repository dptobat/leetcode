<?php

class Solution {

    /**
     * @param String $S
     * @return Integer[]
     */
    function diStringMatch($S) {
        $max=$s_length=strlen($S);
        $min=0;
        $array=[];
        for($i=0;$i<$s_length;$i++){
            $array[$i]=$S[$i]=='I'?$min++:$max--;
        }
        $array[$i]=$max;
        return $array;
    }
}
$S="III";
var_dump((new Solution())->diStringMatch($S));