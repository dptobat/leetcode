<?php

class Solution {

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    //给你一份『词汇表』（字符串数组） words 和一张『字母表』（字符串） chars。
    //
    //假如你可以用 chars 中的『字母』（字符）拼写出 words 中的某个『单词』（字符串），那么我们就认为你掌握了这个单词。
    //
    //注意：每次拼写时，chars 中的每个字母都只能用一次。
    //
    //返回词汇表 words 中你掌握的所有单词的 长度之和。
    //
    // 
    //
    //示例 1：
    //
    //输入：words = ["cat","bt","hat","tree"], chars = "atach"
    //输出：6
    //解释：
    //可以形成字符串 "cat" 和 "hat"，所以答案是 3 + 3 = 6。
    //示例 2：
    //
    //输入：words = ["hello","world","leetcode"], chars = "welldonehoneyr"
    //输出：10
    //解释：
    //可以形成字符串 "hello" 和 "world"，所以答案是 5 + 5 = 10。
    function countCharacters($words, $chars) {
        //记录chars出现的次数;
        $chars_length=strlen($chars);
        $chars_array=[];
        for($i=0;$i<$chars_length;$i++){
            isset($chars_array[$chars[$i]]) or $chars_array[$chars[$i]]=0;
            $chars_array[$chars[$i]]++;
        }
        $words_count=count($words);
        $count=0;
        for($i=0;$i<$words_count;$i++){
            $temp_count=0;
            $j_length=strlen($words[$i]);
            $temp_array=$chars_array;
            for($j=0;$j<$j_length;$j++){
                if(isset($temp_array[$words[$i][$j]])&&$temp_array[$words[$i][$j]]>0){
                    $temp_count++;
                    $temp_array[$words[$i][$j]]--;
                }
            }
            $temp_count==$j_length&&$count+=$j_length;
        }
        return $count;
    }
}
var_dump(0.0!=false);