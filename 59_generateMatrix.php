<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer[][]
     */
    //给定一个正整数 n，生成一个包含 1 到 n2 所有元素，且元素按顺时针顺序螺旋排列的正方形矩阵。
    //
    //示例:
    //
    //输入: 3
    //输出:
    //[
    // [ 1, 2, 3 ],
    // [ 8, 9, 4 ],
    // [ 7, 6, 5 ]
    //]

    function generateMatrix($n) {
        $left=$up=0;$right=$down=$n-1;
        $i=1;//放一个数+1;
        $res=[];
        while(true){
            for($j=$left;$j<=$right;$j++){
                $res[$up][$j]=$i;
                $i++;
            }
            if(++$up>$down) break;
            for($j=$up;$j<=$down;$j++){
                $res[$j][$right]=$i;
                $i++;
            }
            if(--$right<$left)break;
            for($j=$right;$j>=$left;$j--){
                $res[$down][$j]=$i;
                $i++;
            }
            if(--$down<$up)break;
            for($j=$down;$j>=$up;$j--){
                $res[$j][$left]=$i;
                $i++;
            }
            if(++$left>$right)break;
        }
        for ($i=0;$i<$n;$i++){
            for($j=0;$j<$n;$j++){
                $new_res[$i][$j]=$res[$i][$j];
            }
        }
        return $new_res;
    }
}
$n=3;
var_dump((new Solution())->generateMatrix($n));