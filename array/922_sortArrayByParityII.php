<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParityII($A) {
        //奇数位的是奇数，偶位数的是偶数;
        $i = 0;
        $j = 1;
        $count = count($A);
        //只要一个没有问题;另一个肯定没有问题
        //循环找位置，做法更简洁;
//        for a in A:
//            if a%2==0:
//                res[i]=a
//                i+=2
//            else:
//                res[j]=a
//                j+=2


        while ($i < $count && $j < $count) {
            //一个找偶数位置
            while ( $i < $count && $j < $count&&$A[$i] % 2 == 0) {
                $i += 2;
            }
            //一个找奇数位置
            while ($i < $count && $j < $count&&$A[$j] % 2) {
                $j += 2;
            }
            //交换$i和$j
            if ($i < $count && $j < $count) {
                [$A[$i], $A[$j]] = [$A[$j], $A[$i]];
                $i += 2;
                $j += 2;
            }
        }
        return $A;
    }
}

$A = [2, 3];
var_dump((new Solution())->sortArrayByParityII($A));