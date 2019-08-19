<?php


class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer[]
     */
    function numMovesStones($a, $b, $c) {
        //最大的情况就是朝向中间移动;
        //最小的情况就是有相邻就是1,没有是2，都相邻就是0;
        //冒泡
        if($a>$b)[$a,$b]=[$b,$a];
        if($b>$c)[$b,$c]=[$c,$b];
        if($a>$b)[$a,$b]=[$b,$a];
        $c_b_dis=$c-$b;
        $b_a_dis=$b-$a;
        $max=$c_b_dis-1+$b_a_dis-1;
        if($c_b_dis<=2||$b_a_dis<=2){
            $min=1;
            if($c_b_dis==1&&$b_a_dis==1){
                $min=0;
            }
        }else{
            $min=2;
        }
        return [$min,$max];
    }
}

$a=3;$b=5;$c=1;
var_dump((new Solution())->numMovesStones($a,$b,$c));


