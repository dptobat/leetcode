<?php

class Solution {

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    function findOcurrences($text, $first, $second) {
        //将字符串拆成数组;
        $text_array = explode(' ', $text);
        $text_count = count($text_array);
        $result = [];
        for ($i = 0; $i < $text_count - 1; $i++) {
            if ($text_array[$i] == $first && $text_array[$i + 1] == $second && $i + 2 < $text_count) {
                //那么说明第三个是想要的;
                $result[] = $text_array[$i + 2];
                $i++;
            }
        }
        return $result;
    }
}

$text = "we will we will rock you";
$first = "we";
$second = "will";

var_dump((new Solution())->findOcurrences($text, $first, $second));

