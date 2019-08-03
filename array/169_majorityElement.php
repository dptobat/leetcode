<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    /*给定一个大小为 n 的数组，找到其中的众数。众数是指在数组中出现次数大于 ⌊ n/2 ⌋ 的元素。

    你可以假设数组是非空的，并且给定的数组总是存在众数。

    示例 1:

    输入: [3,2,3]
    输出: 3
    示例 2:

    输入: [2,2,1,1,1,2,2]
    输出: 2
    */
    function majorityElement($nums) {
          $nums_count=count($nums);
          //定义一个统计个数的数组
          $nums_array=[];
          for($i=0;$i<$nums_count;$i++){
              isset($nums_array[$nums[$i]]) or $nums_array[$nums[$i]]=0;
              $nums_array[$nums[$i]]++;
          }
          $mid=$nums_count>>1;
          foreach ($nums_array as $num=>$times){
              if($times>$mid)return $num;
          }
    }
}
$nums=[2,2,1,1,1,2,2];
var_dump((new Solution())->majorityElement($nums));
