<?php


class Solution {

    /**
     * @param String $instructions
     * @return Boolean
     */
    function isRobotBounded($instructions) {
        $position=new Stdclass();
        $position->x=0;
        $position->y=0;
        $position->direct=0;
        $instructions_length=strlen($instructions);
        for($i=0;$i<$instructions_length;$i++){
            $position=$this->move($position,$instructions[$i]);
        }
        //判断是否有环;
        var_dump($position->x,$position->y);

    }

    function  move($position,$instruct){
        switch ($instruct){
            case 'L':
                $position->direct=$position->direct-1<0?3:$position->direct-1;
                break;
            case 'R':
                $position->direct=$position->direct+1>3?0:$position->direct+1;
                break;
            case 'G':
                $position=$this->direct_move($position);
        }
        return $position;
    }

    function direct_move($postion){
        switch ($postion->direct){
            case 0:
                $postion->y++;
                break;
            case 1:
                $postion->x++;
                break;
            case 2:
                $postion->y--;
                break;
            case 3:
                $postion->x--;
        }
        return $postion;
    }
}
$instructions="GLGL";
var_dump((new Solution())->isRobotBounded($instructions));