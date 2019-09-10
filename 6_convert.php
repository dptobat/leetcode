<?php


class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $s_length=strlen($s);
        $res=[];
        $j=0;
        $flag=false;
        for($i=0;$i<$s_length;$i++){
            $res[$j][]=$s[$i];
            if($j>=$numRows-1||$flag){
                $flag=true;
                $j--;
                if($j<=0){
                    $j=0;
                    $flag=false;
                }
            }else{
                $j++;
            }
        }
        $row=count($res);
        $result='';
        for($i=0;$i<$row;$i++){
            $col=count($res[$i]);
            for($j=0;$j<$col;$j++){
                $result.=$res[$i][$j];
            }
        }
        return $result;
    }
}
$s = "ABc"; $numRows = 2;
var_dump((new Solution())->convert($s,$numRows));