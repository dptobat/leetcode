<?php

class Solution {

    /**
     * @param Integer[][] $board
     * @return NULL
     */
    function gameOfLife(&$board) {
        $row=count($board);
        $col=count($board[0]);
        $live_array=[];
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++){
                $live_count=0;
                $k_max=min($i+1,$row-1);
                for($k=max($i-1,0);$k<=$k_max;$k++){
                    $p_max=min($j+1,$col-1);
                    for($p=max($j-1,0);$p<=$p_max;$p++){
                        if($i==$k&&$p==$j)continue;
                        if($board[$k][$p]==1){
                            $live_count++;
                        }
                    }
                }
                $live_array[$i][$j]=$live_count;
            }
        }
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++){
                if($board[$i][$j]==1){
                    if($live_array[$i][$j]<2||$live_array[$i][$j]>3){
                        $board[$i][$j]=0;
                    }
                }elseif($live_array[$i][$j]==3){
                    $board[$i][$j]=1;
                }
            }
        }
        return $board;
    }
}
$board=[
    [0,1,0],
    [0,0,1],
    [1,1,1],
    [0,0,0]
];
var_dump((new Solution())->gameOfLife($board));