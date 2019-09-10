<?php

class Solution {

    /**
     * @param Integer[][] $obstacleGrid
     * @return Integer
     */
    function uniquePathsWithObstacles($obstacleGrid) {
        $row=count($obstacleGrid);
        $col=count($obstacleGrid[0]);
        $dp=[];
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++) {
                if($obstacleGrid[$i][$j]==1){
                    $dp[$i][$j]=0;
                    continue;
                }
                if($i==0&&$j==0){
                    $dp[$i][$j]=1;
                    continue;
                }
                if($i==0||$j==0){
                    $dp[$i][$j]=($i==0?$dp[$i][$j-1]:$dp[$i-1][$j]);
                    continue;
                }
                $dp[$i][$j]=$dp[$i-1][$j]+$dp[$i][$j-1];
            }
        }
        return $dp[$i-1][$j-1];
    }
}
$obstacleGrid=[  [0,1,0],
    [0,1,0],
    [0,1,0]];
var_dump((new Solution())->uniquePathsWithObstacles($obstacleGrid));