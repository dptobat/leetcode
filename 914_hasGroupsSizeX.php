<?php

class Solution {

    /**
     * @param Integer[] $deck
     * @return Boolean
     */
    function hasGroupsSizeX($deck) {
        //用一个数组;
        $deck_array=[];
        $deck_count=count($deck);
        if($deck_count<2)return false;
        for($i=0;$i<$deck_count;$i++){
            isset($deck_array[$deck[$i]]) or $deck_array[$deck[$i]]=0;
            $deck_array[$deck[$i]]++;
        }
        //只需要判断元素是有共同的公约数;
        foreach ($deck_array as $value){
            isset($same_value) or $same_value=$value;
            if($same_value!=$value){
                return false;
            }
        }
        return true;
    }
}
$deck=[1,1,2,2,2,2];
var_dump((new Solution())->hasGroupsSizeX($deck));