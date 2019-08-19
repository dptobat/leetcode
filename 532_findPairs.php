<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    /*给定一个整数数组和一个整数 k, 你需要在数组里找到不同的 k-diff 数对。这里将 k-diff 数对定义为一个整数对 (i, j), 其中 i 和 j 都是数组中的数字，且两数之差的绝对值是 k.

    示例 1:

    输入: [3, 1, 4, 1, 5], k = 2
    输出: 2
    解释: 数组中有两个 2-diff 数对, (1, 3) 和 (3, 5)。
    尽管数组中有两个1，但我们只应返回不同的数对的数量。
    示例 2:

    输入:[1, 2, 3, 4, 5], k = 1
    输出: 4
    解释: 数组中有四个 1-diff 数对, (1, 2), (2, 3), (3, 4) 和 (4, 5)。
    示例 3:

    输入: [1, 3, 1, 5, 4], k = 0
    输出: 1
    解释: 数组中只有一个 0-diff 数对，(1, 1)。
    注意:

    数对 (i, j) 和数对 (j, i) 被算作同一数对。
    数组的长度不超过10,000。
    所有输入的整数的范围在 [-1e7, 1e7]。*/

    function findPairs($nums, $k) {
        //先排序
        $nums_count=count($nums);
        sort($nums);
        $record=[];
        //定义$i,$j两个指针，依次向前；
        $i=0;$j=1;
        $count=0;

        while($j<$nums_count){
            if($nums[$j]-$nums[$i]<$k){
                $j++;
            }elseif($nums[$j]-$nums[$i]>$k){
                    $i++;
                    if($i==$j){
                        $j++;
                    }
            }else{
                if(!in_array($nums[$i],$record)){
                    $count++;
                    $record[]=$nums[$i];
                }
                //记录加入的$i;
                $j++;$i++;
            }
        }
        return $count;
    }

    function quickSort(&$num, $start, $end) {
        if ($start >= $end) return;
        $partition = $this->partition($num, $start, $end);
        $this->quickSort($num, $start, $partition - 1);
        $this->quickSort($num, $partition + 1, $end);
    }

    function partition(&$num, $start, $end) {
        $base = $num[$start];
        $start_index = $start;
        while ($start < $end) {
            while ($num[$end] > $base && $start < $end) {
                $end--;
            }
            while ($num[$start] <= $base&&$start<$end) {
                $start++;
            }
            //交换$start和$end的值;
            [$num[$start],$num[$end]]=[$num[$end],$num[$start]];
        }
        //交换base和$start_index的值;
        [$num[$start_index],$num[$start]]=[$num[$start],$num[$start_index]];
        return $start;
    }

}


$nums=[3, 1, 4, 1, 5]; $k = 2;
var_dump((new Solution())->findPairs($nums,$k));