<?php
class Solution {

    /**
     * @param Integer[] $bits
     * @return Boolean
     */

    //针对相邻的两个数做运算;!bit1&&bit2;
    function isOneBitCharacter($bits) {
        $bits_count=count($bits);
        $result=0;
        for($i=0;$i<$bits_count-1;$i++){
            $result=!$result&&$bits[$i];
        }
        return !$result;
    }
}
//似乎大家都沒有理解最高贊的評論，都是從0開始遍歷數組。事實上因為只要數組最後一個數是0，那麼這個數組肯定可以被0，10，11分割。
//那麼只需要考慮最後一個0前面連續1的個數，個數是偶數則TRUE，否則FALSE。所以從數組末尾開始遍歷效率會更高。
$bits= [1,1, 1,1,0,1,1,0];
var_dump( (new Solution())->isOneBitCharacter($bits));