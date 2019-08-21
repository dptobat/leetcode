<?php


class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        //使用双指针;
        $chars_count=count($chars);
        $j=0;$count=1;
        for($i=0;$i<$chars_count;$i++){
            while($i<$chars_count-1&&$chars[$i]==$chars[$i+1]){
                $i++;
                $count++;
            }
            $chars[$j++]=$chars[$i];
            if($count>1){
                if($count<10){
                    $chars[$j++]="$count";
                }else{
                   $start=$j;
                   while($count){
                       $mod=$count%10;
                       $chars[$j++]="$mod";
                       $count=(int)($count/10);
                   }
                   //这里还要反向;
                   $end=$j-1;
                   while($start<$end){
                      [$chars[$start],$chars[$end]]=[$chars[$end],$chars[$start]];
                      $start++;$end--;
                   }
                }
                $count=1;
            }
        }
        return $j;
    }
}
$chars=["a","a","a","b","b","a","a"];
var_dump((new Solution())->compress($chars));