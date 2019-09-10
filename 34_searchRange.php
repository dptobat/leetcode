<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $nums_count=count($nums);
        $i=0;
        $j=$nums_count-1;
        while($i<=$j){
            $mid=$i+(($j-$i)>>1);
            if($nums[$mid]==$target){
                $start_index=$end_index=$mid;

                while($start_index>$i&&$target==$nums[$start_index-1]){
                    $start_index--;
                }
                while($end_index<$j&&$target==$nums[$end_index+1]){
                    $end_index++;
                }
                return [$start_index,$end_index];
            }
            if($nums[$mid]>$target){
                $j=$mid-1;
            }else{
                $i=$mid+1;
            }

        }
        return [-1,-1];
    }
}
$nums = [0,0,0,1,2,3];$target =0;
var_dump((new Solution())->searchRange($nums,$target));