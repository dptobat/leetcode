<?php

class Solution {

    /**
     * @param Integer[] $seats
     * @return Integer
     */
    //在一排座位（ seats）中，1 代表有人坐在座位上，0 代表座位上是空的。
    //
    //至少有一个空座位，且至少有一人坐在座位上。
    //
    //亚历克斯希望坐在一个能够使他与离他最近的人之间的距离达到最大化的座位上。
    //
    //返回他到离他最近的人的最大距离。
    //
    //示例 1：
    //
    //输入：[1,0,0,0,1,0,1]
    //输出：2
    //解释：
    //如果亚历克斯坐在第二个空位（seats[2]）上，他到离他最近的人的距离为 2 。
    //如果亚历克斯坐在其它任何一个空位上，他到离他最近的人的距离为 1 。
    //因此，他到离他最近的人的最大距离是 2 。
    //示例 2：
    //
    //输入：[1,0,0,0]
    //输出：3
    //解释：
    //如果亚历克斯坐在最后一个座位上，他离最近的人有 3 个座位远。
    //这是可能的最大距离，所以答案是 3 。

    function maxDistToClosest($seats) {
        //计算1之间的最大距离;
        $seats_count=count($seats);
        $dis=0;
        //判断距离因子;
        $factor=($seats[0]==1?1:2);
        //初始化最大为当前的距离因子;
        $max=$factor;
        for($i=1;$i<$seats_count;$i++){
            if($seats[$i]==0){
                $dis+=$factor;
            }else{
                if($dis>=$max){
                    //这里需要将当前的也算进去;
                    $max=$dis+$factor;
                }
                $dis=0;
                $factor=1;
            }
        }
        ($seats[$seats_count-1]==0)&&($dis*=2);
        $max=max($dis,$max);
        return $max>>1;
        //先算左右两边：然后算中间;
//
//    int d = 0, d1=0, d2=0;
//    int i=0, j=seats.size()-1;
//    while(0==seats[i++]) d1++;
//    while(0==seats[j--]) d2++;
//    d = max(d1, d2);
//    d1 = 0;
//    while(i<=j){
//        while(0==seats[i++]) d1++;
//        d = max(d, (d1+1)/2);
//        d1 = 0;
//    }
//    return d;

    }
}
$seats=[1,0,0,0];
var_dump((new Solution())->maxDistToClosest($seats));