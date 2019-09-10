<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    //给出一个区间的集合，请合并所有重叠的区间。
    //
    //示例 1:
    //
    //输入: [[1,3],[2,6],[8,10],[15,18]]
    //输出: [[1,6],[8,10],[15,18]]
    //解释: 区间 [1,3] 和 [2,6] 重叠, 将它们合并为 [1,6].
    //示例 2:
    //
    //输入: [[1,4],[4,5]]
    //输出: [[1,5]]
    //解释: 区间 [1,4] 和 [4,5] 可被视为重叠区间。

    function merge($intervals) {
        //先将$intervals按照第一个元素排序;
        $intervals_count=count($intervals);
        if($intervals_count==0)return [];
        $new_intervals=[];
        $intervals_keys=[];
        for($i=0;$i<$intervals_count;$i++){
            if(isset($new_intervals[$intervals[$i][0]])){
                $new_intervals[$intervals[$i][0]]=max($new_intervals[$intervals[$i][0]],$intervals[$i][1]);
            }else{

                $new_intervals[$intervals[$i][0]]=$intervals[$i][1];
                $intervals_keys[]=$intervals[$i][0];
            }
        }

        //按照$keys进行排序
        sort($intervals_keys);
        $keys_count=count($intervals_keys);
        $result=[];
        for($i=0;$i<$keys_count-1;$i++){
            if($intervals_keys[$i+1]>$new_intervals[$intervals_keys[$i]]){
                $result[]=[$intervals_keys[$i],$new_intervals[$intervals_keys[$i]]];
            }else{
                //合并为下一个做准备;
                $new_intervals[$intervals_keys[$i]]=max($new_intervals[$intervals_keys[$i]],$new_intervals[$intervals_keys[$i+1]]);
                $intervals_keys[$i+1]=$intervals_keys[$i];
            }
        }
        $result[]=[$intervals_keys[$i],$new_intervals[$intervals_keys[$i]]];
        return $result;
    }
}

$intervals=[[1,4],[1,5]];
var_dump((new Solution())->merge($intervals));