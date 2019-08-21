<?php



class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $a_length=strlen($a);
        $b_length=strlen($b);

        $i=$a_length-1;
        $j=$b_length-1;
        $str='';
        $k=0;
        while($i>=0||$j>=0){
            if(($remain=($str[$k]??0)+($i<0?0:$a[$i])+($j<0?0:$b[$j])-2)>=0){
                $str[$k+1]=1;
                $str[$k]=$remain;
            }else{
                $str[$k]=$remain+2;
            }
            $i--;$j--;
            $k++;
        }
        return strrev($str);
    }
}
$a='1111';$b='1111';
var_dump((new Solution())->addBinary($a,$b));