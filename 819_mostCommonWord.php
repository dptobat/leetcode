<?php

class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        //
        $paragraph .= ' ';
        $para_length = strlen($paragraph);
        $word = '';
        $words_hash = [];
        $max = 0;
        $max_word = '';
        for ($i = 0; $i < $para_length; $i++) {
            if ($paragraph[$i] > 'z' || $paragraph[$i] < 'A' || ($paragraph[$i] > 'Z' && $paragraph[$i] < 'a')) {
                if (!in_array($word, $banned) && $word != '') {
                    isset($words_hash[$word]) or $words_hash[$word] = 0;
                    $words_hash[$word]++;
                    if ($words_hash[$word] > $max) {
                        $max = $words_hash[$word];
                        $max_word = $word;
                    }
                }
                $word = '';
            } else {
                if ($paragraph[$i] >= 'A' && $paragraph[$i] <= 'Z') {
                    $paragraph[$i] = chr(ord('a') - ord('A') + ord($paragraph[$i]));
                }
                $word .= $paragraph[$i];
            }
        }

        return $max_word;
    }
}

$paragraph = "Bob hit a ball, the hit BALL flew far after it was hit.";
$banned = ["hit"];
var_dump((new Solution())->mostCommonWord($paragraph, $banned));