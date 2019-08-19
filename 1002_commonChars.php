<?php

class Solution {

    /**
     * @param String[] $A
     * @return String[]
     */
    //给定仅有小写字母组成的字符串数组 A，返回列表中的每个字符串中都显示的全部字符（包括重复字符）组成的列表。例如，如果一个字符在每个字符串中出现 3 次，但不是 4 次，则需要在最终答案中包含该字符 3 次。
    //
    //你可以按任意顺序返回答案。
    //
    // 
    //
    //示例 1：
    //
    //输入：["bella","label","roller"]
    //输出：["e","l","l"]
    //示例 2：
    //
    //输入：["cool","lock","cook"]
    //输出：["c","o"]
    function commonChars($A) {
        //将第一个元素赋值给same数组;
        $same_length=strlen($A[0]);
        $A_count=count($A);
        for($i=0;$i<$same_length;$i++){
            isset($last_same[$A[0][$i]]) or $last_same[$A[0][$i]]=0;
            $last_same[$A[0][$i]]++;
        }

        for($i=1;$i<$A_count;$i++){
            $same=[];
            $j_length=strlen($A[$i]);
            for($j=0;$j<$j_length;$j++){
                if(isset($last_same[$A[$i][$j]])&&$last_same[$A[$i][$j]]>0){
                    isset($same[$A[$i][$j]]) or $same[$A[$i][$j]]=0;
                    $same[$A[$i][$j]]++;
                    $last_same[$A[$i][$j]]--;
                }
            }
            $last_same=$same;
        }
        //对last_same进行输出
        $result=[];
        foreach ($last_same as $item=>$times){
            for($i=0;$i<$times;$i++){
                $result[]=$item;
            }
        }
        return $result;
    }
}
$A=["cool","lock","cook"];
var_dump((new Solution())->commonChars($A));