<?php

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        //建立数组;
       $words_array=[".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",
                     ".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",
                     ".--","-..-","-.--","--.."];
       $words_count=count($words);
       $str_array=[];
       for($i=0;$i<$words_count;$i++){
           $j_length=strlen($words[$i]);
           $str='';
           for($j=0;$j<$j_length;$j++){
               $str.=$words_array[ord($words[$i][$j])-ord('a')];
           }
         in_array($str,$str_array) or $str_array[]=$str;
       }
       return count($str_array);
    }
}
$words = ["gin", "zen", "gig", "msg"];
var_dump((new Solution())->uniqueMorseRepresentations($words));