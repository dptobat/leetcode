<?php


class Solution {

    /**
     * @param Integer[][] $points
     * @return Boolean
     */
    //回旋镖定义为一组三个点，这些点各不相同且不在一条直线上。
    //
    //给出平面上三个点组成的列表，判断这些点是否可以构成回旋镖。
    //
    // 
    //
    //示例 1：
    //
    //输入：[[1,1],[2,3],[3,2]]
    //输出：true
    //示例 2：
    //
    //输入：[[1,1],[2,2],[3,3]]
    //输出：false
    function isBoomerang($points) {
        //算出斜率就可以了;
        $x1=$points[0][0];
        $y1=$points[0][1];
        $x2=$points[1][0];
        $y2=$points[1][1];
        $x3=$points[2][0];
        $y3=$points[2][1];
        //如果x1=x2;
        if($x1==$x2&&$x2==$x3){
            return false;
        }
        if($x1-$x2==0){
            return $y1-$y2!=0;
        }
        if($x2-$x3==0){
            return $y2-$y3!=0;
        }
        return ($y1*$y1-$y2*$y2)/($x1*$x1-$x2*$x2)!= ($y2*$y2-$y3*$y3)/($x2*$x2-$x3*$x3);
    }
}

$points=[[1,1],[1,2],[1,3]];
var_dump((new Solution())->isBoomerang($points));