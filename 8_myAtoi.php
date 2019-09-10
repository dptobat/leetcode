<?php


class Solution {
    function myAtoi($str) {
        $str_len=strlen($str);
        $res='';
        for($i=0;$i<$str_len;$i++){
            //判断是不是数字或者-，+;
            $dif=ord($str[$i])-ord('0');
            if($res==''){
                if($str[$i]==' ')continue;
                if($str[$i]!='-'&&$str[$i]!='+'&&($dif<0||$dif>9))return 0;
                $res=$str[$i];
            }else {
                if ($dif >= 0 && $dif <= 9) {
                    $res .= $str[$i];
                } else {
                    break;
                }
            }
        }
        $res_len=strlen($res);
        if($res_len==0)return 0;

        $start_index=0;
        if(($res[0]=='-'||$res[0]=='+')){
            $start_index=1;
        }
        $mult=0;
        for($i=$start_index;$i<$res_len;$i++){
            $mult*=10;
            $mult+=$res[$i];
            if($res[0]=='-'){
                if($mult>=2147483648){
                        return -2147483648;
                }
            }else{
                if($mult>=2147483647){
                    return 2147483647;
                }
            }

        }
        $res[0]=='-'&&$mult=-$mult;
        return $mult;
    }
}

$str= "   -42";
var_dump((new Solution())->myAtoi($str));