<?php


class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        $res=1;
        for($i=abs($n);$i>0;$i=intdiv($i,2)){
            if($i%2!=0){
                $res*=$x;
            }
            $x*=$x;
        }
        return  $n < 0 ? 1 / $res : $res;
    }
}
$x= 2.00000; $n=-3;
var_dump((new Solution())->myPow($x,$n));
