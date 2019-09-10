<?php

class Solution {

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word) {
        //使用回溯法搜索路径;
        $row=count($board);
        $col=count($board[0]);
        $result=false;
        $this->def($board,0,0,$row,$col,$word,0,$result,'',[]);
        return $result;
    }

    function def($board,$start_row,$start_col,$row,$col,$word,$start_index,&$result,$path,$visit){

    }
}
$board =
    [
        ['A','B','C','E'],
        ['S','F','C','S'],
        ['A','D','E','E']
    ];
$word="ABCB";
var_dump((new Solution())->exist($board,$word));
