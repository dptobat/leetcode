<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $strs_count=count($strs);
        $repeat=[];
        for($i=0;$i<$strs_count;$i++){
            $str_array=str_split($strs[$i]);
            sort($str_array);
            $str=implode($str_array,'');
            $repeat[$str][]=$strs[$i];
        }
        $res=[];

        foreach ($repeat as $item) {
            $res[]=$item;
        }
        return $res;
    }
}

$strs=["eat", "tea", "tan", "ate", "nat", "bat"];
var_dump((new Solution())->groupAnagrams($strs));