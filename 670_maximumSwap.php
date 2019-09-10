<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    //给定一个非负整数，你至多可以交换一次数字中的任意两位。返回你能得到的最大值。
    //
    //示例 1 :
    //
    //输入: 2736
    //输出: 7236
    //解释: 交换数字2和数字7。
    //示例 2 :
    //
    //输入: 9973
    //输出: 9973
    //解释: 不需要交换。
    //注意:
    //
    //给定数字的范围是 [0, 108]

    function maximumSwap($num) {
        $num_array=[];
        $num_tmp=$num;
        while($num_tmp){
            $num_array[]=$num_tmp%10;
            $num_tmp=intdiv($num_tmp,10);
        }
        $num_count=count($num_array);
        $max_index=PHP_INT_MIN;
        $swap_flag=false;
        for($i=$num_count-1;$i>=0;$i--){
            //说明是要交换的;
            $num_array[$i];
            $max=0;
            for($j=$i-1;$j>=0;$j--){
                if($num_array[$j]>=$max){
                    $max=$num_array[$j];
                    $max_index=$j;
                }
            }
            //说明可以交换;
            if($num_array[$i]<$max){
                [$num_array[$i],$num_array[$max_index]]=[$num_array[$max_index],$num_array[$i]];
                $swap_flag=true;
                break;
            }
        }

        if(!$swap_flag)return $num;
        //将数据在乘起来;
        $num=0;
        for($i=$num_count-1;$i>=0;$i--){
            $num=$num*10+$num_array[$i];
        }
        return $num;
    }
}
$num=9973;
var_dump((new Solution())->maximumSwap($num));