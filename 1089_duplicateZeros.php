<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
        //从右到走交换,碰到0了之后;
        $arr_count=count($arr);
        for($i=0;$i<$arr_count;$i++){
            if($arr[$i]==0&&$i+1<$arr_count){
                $end=$arr_count-1;
                while($end>$i+1){
                    [$arr[$end],$arr[$end-1]]=[$arr[$end-1],$arr[$end]];
                    $end--;
                }
                //最后一个0不需要复写;
                $arr[$i+1]=0;$i++;
            }
        }
        return $arr;
    }
}

$arr=[0,0,0,0,0,0,0];
var_dump((new Solution())->duplicateZeros($arr));