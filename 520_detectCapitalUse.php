<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    //给定一个单词，你需要判断单词的大写使用是否正确。
    //
    //我们定义，在以下情况时，单词的大写用法是正确的：
    //
    //全部字母都是大写，比如"USA"。
    //单词中所有字母都不是大写，比如"leetcode"。
    //如果单词不只含有一个字母，只有首字母大写， 比如 "Google"。
    //否则，我们定义这个单词没有正确使用大写字母。
    //
    //示例 1:
    //
    //输入: "USA"
    //输出: True
    //示例 2:
    //
    //输入: "FlaG"
    //输出: False
    //注意: 输入是由大写和小写拉丁字母组成的非空单词。

    function detectCapitalUse($word) {

        $word_length=strlen($word);
        $up_flag=ord('a')-ord($word[0])>0;
        $consistent_flag=ord('a')-ord($word[1])>0;
        //如果第一个小写，后面的大写就返回false;
        if(!$up_flag&&$consistent_flag)return false;
        for($i=2;$i<$word_length;$i++){
            $current_flag=ord('a')-ord($word[$i])>0;
            if(($consistent_flag&&!$current_flag)||(!$consistent_flag&&$current_flag)){
                return false;
            }
        }
        return true;
    }
}
$word='leetcode';
var_dump((new Solution())->detectCapitalUse($word));