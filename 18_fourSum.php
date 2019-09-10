<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */

    function fourSum($nums, $target) {
        $nums_count=count($nums);
        sort($nums);
        $result=[];
        for($i=0;$i<$nums_count-3;$i++){
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue;
            for($j=$i+1;$j<$nums_count-2;$j++){
                if ($j > $i+1 && $nums[$j] == $nums[$j - 1]) continue;
                $k=$j+1;
                $l=$nums_count-1;
                while($k<$l){
                    $sum=$nums[$i]+$nums[$j]+$nums[$k]+$nums[$l];

                    if($sum==$target){
                        $result[]=[$nums[$i],$nums[$j],$nums[$k],$nums[$l]];
                        while($nums[$k]==$nums[$k+1]&&$k<$l){$k++;}
                        while($nums[$l]==$nums[$l-1]&&$k<$l){$l--;}
                        $l--;$k++;
                    }elseif($sum>$target){
                        $l--;
                    }else{
                        $k++;
                    }
                }
            }
        }
        return $result;
    }
}
$nums = [-1,0,-5,-2,-2,-4,0,1,-2];$target = -9;
var_dump((new Solution())->fourSum($nums,$target));