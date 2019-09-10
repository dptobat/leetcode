<?php

class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $digits_length = strlen($digits);
        if($digits_length==0)return [];
        $num_array = [
            2 => ['a', 'b', 'c'],
            3 => ['d','e','f'],
            4 => ['g','h','i'],
            5 => ['j','k','l'],
            6 => ['m','n','o'],
            7 => ['p','q','r','s'],
            8 => ['t','u','v'],
            9 => ['w','x','y','z']
        ];
        $res=[];
        $this->dfs($num_array,$digits,0,$res,$digits_length,'');
        return $res;
    }

    function dfs($num_array,$digits,$i,&$res,$digits_length,$path){
        if($i>$digits_length){
            return ;
        }
        if($i==$digits_length){
            $res[]=$path;
            return ;
        }
        $count=count($num_array[$digits[$i]]);
        for($j=0;$j<$count;$j++){
            $path.=$num_array[$digits[$i]][$j];
            $this->dfs($num_array,$digits,$i+1,$res,$digits_length,$path);
            $path=substr($path,0,strlen($path)-1);
        }
    }
}
$digits="3";
var_dump((new Solution())->letterCombinations($digits));