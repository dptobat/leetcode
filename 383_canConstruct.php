<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $ransomNote_length=strlen($ransomNote);
        $ransomNote_array=[];
        for($i=0;$i<$ransomNote_length;$i++){
            isset($ransomNote_array[$ransomNote[$i]]) or $ransomNote_array[$ransomNote[$i]]=0;
            $ransomNote_array[$ransomNote[$i]]++;
        }
        $magazine_length=strlen($magazine);
        for($i=0;$i<$magazine_length;$i++){
            if(isset($ransomNote_array[$magazine[$i]])){
                $ransomNote_array[$magazine[$i]]--;
                if($ransomNote_array[$magazine[$i]]==0){
                    unset($ransomNote_array[$magazine[$i]]);
                }
            }
        }
        return !count($ransomNote_array);
    }
}
$a='aa';
$b='aab';
var_dump((new  Solution())->canConstruct($a,$b));