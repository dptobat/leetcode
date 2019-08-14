<?php

class Solution {
    function numJewelsInStones($J, $S) {
        //将J中的类型用hash存储;
        $j_length=strlen($J);
        $j_array=[];
        for($i=0;$i<$j_length;$i++){
            $j_array[]=$J[$i];
        }
        $count=0;
        $S_count=strlen($S);
        for($i=0;$i<$S_count;$i++){
            in_array($S[$i],$j_array)&&$count++;
        }
        return $count;
    }
}
$J = "z"; $S = "ZZ";
var_dump((new Solution())->numJewelsInStones($J,$S));