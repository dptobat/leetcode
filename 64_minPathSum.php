<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        //可以用动态规划;
        //动态方程:$dp[$i][$j]=min($dp[$i][$j-1],$dp[$i-1][$j]);
        //总共的步数是
        $row=count($grid);
        $col=count($grid[0]);
        $dp=[];
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++){
                if($i==0&&$j==0){
                    $dp[0][0]=$grid[0][0];
                }elseif($i==0){
                    $dp[$i][$j]=$grid[$i][$j]+$dp[$i][$j-1];
                }elseif($j==0){
                    $dp[$i][$j]=$grid[$i][$j]+$dp[$i-1][$j];
                }else{
                    $dp[$i][$j]=$grid[$i][$j]+min($dp[$i][$j-1],$dp[$i-1][$j]);
                }
            }
        }
        return $dp[$i-1][$j-1];
    }
}
$grid=[
    [1,3,1],
    [1,5,1],
    [4,2,1]
];
var_dump((new Solution())->minPathSum($grid));