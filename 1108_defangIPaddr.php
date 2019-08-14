<?php

class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
//        return str_replace('.','[.]',$address);
        //另一种就是遍历address;用另外的一个数组去存数据;
        $address_length=strlen($address);
        $a='';
        for($i=0;$i<$address_length;$i++){
            if($address[$i]=='.'){
                $a.='[.]';
            }else{
                $a.=$address[$i];
            }
        }
        return $a;
    }

}

$address="255.100.50.0";
var_dump((new Solution())->defangIPaddr($address));