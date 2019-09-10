<?php


class MyCalendar {
    /**
     */
    private $min;
    private $max;
    function __construct() {

    }

    /**
     * @param Integer $start
     * @param Integer $end
     * @return Boolean
     */
    function book($start, $end) {
        if(!isset($this->min)&&!isset($this->max)){
            $this->min=$start;
            $this->max=$end;
            return true;
        }
        if($end<=$this->min||$start>=$this->max){
            if($end<=$this->min){
                $this->min=$start;
            }else{
                $this->max=$end;
            }
            return true;
        }else{
            return false;
        }
    }
}
$MyCalendar =new MyCalendar();

var_dump($MyCalendar->book(10, 20));
// returns true
var_dump($MyCalendar->book(15, 25));
; // returns false
var_dump($MyCalendar->book(20, 30));
//$MyCalendar.book(20, 30); // returns true


/**
 * Your MyCalendar object will be instantiated and called as such:
 * $obj = MyCalendar();
 * $ret_1 = $obj->book($start, $end);
 */