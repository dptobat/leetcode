<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $res=[];
        $this->dsf($n,$k,1,$res,[],0);
        return $res;
    }

    function dsf($n,$k,$start,&$res,$path,$count){
        if($count>$k){
            return ;
        }
        if($count==$k){
            $res[]=$path;
            return;
        }
        for($i=$start;$i<=$n;$i++){
            $path[]=$i;
            $count++;
            $this->dsf($n,$k,$i+1,$res,$path,$count);
            array_pop($path);
            $count--;
        }
    }
}
$n=4;$k=2;
var_dump((new Solution())->combine($n,$k));