<?php


class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $i=0;
        $j=strlen($s)-1;
        //定义元音字母;
        $vowels=['a','o','i','e','u','A','O','I','E','U'];
        while($i<$j){
            if(!in_array($s[$i],$vowels)){
                $i++;
                continue;
            }
            if(!in_array($s[$j],$vowels)){
                $j--;
                continue;
            }
            [$s[$i],$s[$j]]=[$s[$j],$s[$i]];
            $i++;$j--;
        }
        return $s;
    }
}
$s= "leetcode";
var_dump((new Solution())->reverseVowels($s));