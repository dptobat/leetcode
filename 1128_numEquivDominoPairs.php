<?php


class Solution {

    /**
     * @param Integer[][] $dominoes
     * @return Integer
     */
    function numEquivDominoPairs($dominoes) {
        //思路，让小数在大数前面[2,1]=[1,2];交换位置;
        //第一位的乘以10+后面的一位;
        $dominoes_count=count($dominoes);
        //设置一个数组存储元素;
        $result_array=[];
        $count=0;
        for($i=0;$i<$dominoes_count;$i++){
            //始终让小数的在前面;
            $result=$dominoes[$i][0]>$dominoes[$i][1]?$dominoes[$i][1]*10+$dominoes[$i][0]:$dominoes[$i][0]*10+$dominoes[$i][1];
            //判断$result是不是在$result_array中;
            isset($result_array[$result]) or $result_array[$result]=0;
            $result_array[$result]++;
        }
        foreach ($result_array as $times){
            //只有大于1的才会算;
            if($times>1){
                $count+=$times*($times-1)/2;
            }
        }
        return $count;
    }
}
$dominoes=[[1,2],[1,2],[1,1],[1,2],[2,2]];
var_dump((new Solution())->numEquivDominoPairs($dominoes));