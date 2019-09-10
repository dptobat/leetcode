<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    //你总共有 n 枚硬币，你需要将它们摆成一个阶梯形状，第 k 行就必须正好有 k 枚硬币。
    //
    //给定一个数字 n，找出可形成完整阶梯行的总行数。
    //
    //n 是一个非负整数，并且在32位有符号整型的范围内。
    //
    //示例 1:
    //
    //n = 5
    //
    //硬币可排列成以下几行:
    //¤
    //¤ ¤
    //¤ ¤
    //
    //因为第三行不完整，所以返回2.
    //示例 2:
    //
    //n = 8
    //
    //硬币可排列成以下几行:
    //¤
    //¤ ¤
    //¤ ¤ ¤
    //¤ ¤
    //
    //因为第四行不完整，所以返回3.

    function arrangeCoins($n) {
        //假设可以排列成k行;二分查找;
        $ans=0;
        $left=1;$right=$n;
        while($left<=$right){
            $mid=$left+(($right-$left)>>1);
            if($mid+1<=$n*2/$mid){
                $left=$mid+1;
                $ans=$mid;
            }else{
                $right=$mid-1;
            }
        }
        return $ans;
    }
}
$n=0;
var_dump((new Solution())->arrangeCoins($n));