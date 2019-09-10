<?php

class NumArray {
    /**
     * @param Integer[] $nums
     */


    protected $sum_array=[];
    function __construct($nums) {
        $sum=0;
        foreach ($nums as $num) {
            $sum+=$num;
            $this->sum_array[]=$sum;
        }
    }

    /**
     * @param Integer $i
     * @param Integer $j
     * @return Integer
     */
    function sumRange($i, $j) {
        return $this->sum_array[$j]-($this->sum_array[$i-1]??0);
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($i, $j);
 */

$nums= [-2, 0, 3, -5, 2, -1];
$obj=new NumArray($nums);
$ret_1=$obj->sumRange(0,2);
var_dump($ret_1);
$ret_1=$obj->sumRange(2,5);
var_dump($ret_1);
$ret_1=$obj->sumRange(0,5);
var_dump($ret_1);