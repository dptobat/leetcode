<?php

class Solution {

    /**
     * @param String $S
     * @return Integer[][]
     */
    function largeGroupPositions($S) {
        $s_count=strlen($S);
        $start_index=$end_index=0;
        $result=[];
        for($i=0;$i<$s_count-1;$i++){
            if($S[$i]==$S[$i+1]){
                $end_index++;
            }else{
                //说明不连续了,这个时候先将大于3的存下来，然后修改start和end;
                if($end_index-$start_index>=2){
                   $result[]=[$start_index,$end_index];
                }
                $start_index=$end_index=$i+1;
            }
            //如果$i已经到了末尾;
        }
        if($end_index-$start_index>=2){
            $result[]=[$start_index,$end_index];
        }
        return $result;
    }
}
$S="abcdddeeeeaabbbcd";
var_dump((new Solution())->largeGroupPositions($S));