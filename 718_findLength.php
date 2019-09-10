<?php


class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer
     */
    function findLength($A, $B) {
      $A_count=count($A);
      $B_count=count($B);
      $max=0;
      for($i=0;$i<$A_count;$i++){
         for($j=0;$j<$B_count;$j++){

         }
      }
      return $max;
    }
}
$A= [69,51,94,52,72,74,65,65,99,1];
$B=[65,99,82,27,43,95,9,20,13,99];
var_dump((new Solution())->findLength($A,$B));