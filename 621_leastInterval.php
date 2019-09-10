<?php

class Solution {

    /**
     * @param String[] $tasks
     * @param Integer $n
     * @return Integer
     */
    //种类的任务。任务可以以任意顺序执行，并且每个任务都可以在 1 个单位时间内执行完。CPU 在任何一个单位时间内都可以执行一个任务，或者在待命状态。
    //
    //然而，两个相同种类的任务之间必须有长度为 n 的冷却时间，因此至少有连续 n 个单位时间内 CPU 在执行不同的任务，或者在待命状态。
    //
    //你需要计算完成所有任务所需要的最短时间。
    //
    //示例 1：
    //
    //输入: tasks = ["A","A","A","B","B","B"], n = 2
    //输出: 8
    //执行顺序: A -> B -> (待命) -> A -> B -> (待命) -> A -> B.
    function leastInterval($tasks, $n) {
        //先把任务进行分类取用;
        $tasks_count=count($tasks);
        $tasks_array=[];
        for($i=0;$i<$tasks_count;$i++){
            isset($tasks_array[$tasks[$i]]) or $tasks_array[$tasks[$i]]=0;
            $tasks_array[$tasks[$i]]++;
        }
        $time=0;
        //
        foreach ($tasks_array as $task=>&$count){
            //每一个周期花的时间;
            if($count==0){
                continue;
            }
        }


    }
}