<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        $res='';
        $Roman=[['1'=>'I','4'=>'IV','5'=>'V','9'=>'IX'],
                ['1'=>'X','4'=>'XL','5'=>'L','9'=>'XC'],
                ['1'=>'C','4'=>'CD','5'=>'D','9'=>'CM'],
                ['1'=>'M']];
        $index=0;
        while($num){
            $temp='';
            $mod=$num%10;
            $remain=0;
            if($mod==9){
                $temp=$Roman[$index]['9'];
            }elseif($mod>=5){
                $temp=$Roman[$index]['5'];
                $remain=$mod-5;
            }elseif($mod==4){
                $temp=$Roman[$index]['4'];
            }else{
                $remain=$mod-0;
            }
            for($i=0;$i<$remain;$i++){
                $temp.=$Roman[$index]['1'];
            }
            $res=$temp.$res;
            $index++;
            $num=intdiv($num,10);
        }
        return $res;
    }
}
$num=40;
var_dump((new Solution())->intToRoman($num));