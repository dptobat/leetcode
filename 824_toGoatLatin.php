<?php


class Solution {

    /**
     * @param String $S
     * @return String
     */
    //给定一个由空格分割单词的句子 S。每个单词只包含大写或小写字母。
    //
    //我们要将句子转换为 “Goat Latin”（一种类似于 猪拉丁文 - Pig Latin 的虚构语言）。
    //
    //山羊拉丁文的规则如下：
    //
    //如果单词以元音开头（a, e, i, o, u），在单词后添加"ma"。
    //例如，单词"apple"变为"applema"。
    //
    //如果单词以辅音字母开头（即非元音字母），移除第一个字符并将它放到末尾，之后再添加"ma"。
    //例如，单词"goat"变为"oatgma"。
    //
    //根据单词在句子中的索引，在单词最后添加与索引相同数量的字母'a'，索引从1开始。
    //例如，在第一个单词后添加"a"，在第二个单词后添加"aa"，以此类推。
    //返回将 S 转换为山羊拉丁文后的句子。
    //
    //示例 1:
    //
    //输入: "I speak Goat Latin"
    //输出: "Imaa peaksmaaa oatGmaaaa atinLmaaaaa"
    //示例 2:
    //
    //输入: "The quick brown fox jumped over the lazy dog"
    //输出: "heTmaa uickqmaaa rownbmaaaa oxfmaaaaa umpedjmaaaaaa overmaaaaaaa hetmaaaaaaaa azylmaaaaaaaaa ogdmaaaaaaaaaa"
    function toGoatLatin($S) {
        $vowels=['a','e','i','o','u','A','E','I','O','U'];
        $S.=' ';
        $new_s='';
        $s_length=strlen($S);
        $word='';
        $start_word=$S[0];
        $start_index=0;
        $words_count=0;
        $word_length=0;
        for($i=0;$i<$s_length;$i++){
            if($S[$i]==' '){
                $words_count++;
                if(!in_array($start_word,$vowels)){
                    //说明是辅音字母开头的,将第一个放到最后;
                    while($start_index<$word_length-1){
                        $word[$start_index]=$word[$start_index+1];
                        $start_index++;
                    }
                    $word[$start_index]=$start_word;
                    $start_index=0;
                }
                $word.='ma';
                for($j=0;$j<$words_count;$j++){
                    $word.='a';
                }
                if($i!=$s_length-1){
                    $word.=' ';
                }
                $new_s.=$word;
                $word='';
                $word_length=0;
                $start_word=$S[$i+1]??'';
            }else{
                $word.=$S[$i];
                $word_length++;
            }
        }
        return $new_s;
    }
}

$S="The quick brown fox jumped over the lazy dog";
var_dump((new Solution())->toGoatLatin($S));