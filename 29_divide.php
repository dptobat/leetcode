<?php


class Solution {

    /**
     * @param Integer $dividend
     * @param Integer $divisor
     * @return Integer
     */
    function divide($dividend, $divisor) {
        //倍数相加;
        $start=0;
        $end=1;

        $start_divisor=$end_divisor=0;
        $divisor_origin=$divisor;
        $dividend_origin=$dividend;
        $divisor=abs($divisor);
        $dividend=abs($dividend);
        if($dividend<$divisor)return 0;
        while($divisor<$dividend){
            $start=$end;
            $start_divisor=$divisor;
            $divisor=$divisor+$divisor;
            $end_divisor=$divisor;
            $end=$start+$start;
        }

        //判断从哪一头开始;//离尾端近;
        $divisor_tmp=abs($divisor_origin);
       if($dividend-$start_divisor>$end_divisor-$dividend){
           while($end_divisor>$dividend){
               $end--;
               $end_divisor-=$divisor_tmp;
           }
           $res= $end;
       }else{
           while($start_divisor<=$dividend){
               $start++;
               $start_divisor+=$divisor_tmp;
           }
           $res=$start-1;
       }
       if(($divisor_origin>0&&$dividend_origin>0)||($dividend_origin<0&&$divisor_origin<0)){
           return min($res,2147483647);
       }else{
           return max(-$res,-2147483648);
       }
        //乘数就在$start和$end之间;
    }
}
$dividend=-2147483648;$divisor=-3;
var_dump((new Solution())->divide($dividend,$divisor));