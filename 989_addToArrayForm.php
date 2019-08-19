<?php


class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer[]
     */
    function addToArrayForm($A, $K) {
        $a_array=array_reverse($A);
        while($K){
            $j=$K%10;
            $k_array[]=$j;
            $K=(int)($K/10);
        }
        $max_count=max(count($a_array),count($k_array));
        for($i=0;$i<$max_count;$i++){
            if(($remain=(($result[$i]??0)+($k_array[$i]??0)+($a_array[$i]??0)-10))>=0){
                $result[$i]=$remain;
                $result[$i+1]=1;
            }else{
                $result[$i]=10+$remain;
            }
        }
        return array_reverse($result);
    }
}
$A =  [1]; $K =99999;
var_dump((new Solution())->addToArrayForm($A,$K));