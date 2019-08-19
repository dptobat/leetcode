<?php


class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[][] $queries
     * @return Integer[]
     */
    //给出一个整数数组 A 和一个查询数组 queries。
    //
    //对于第 i 次查询，有 val = queries[i][0], index = queries[i][1]，我们会把 val 加到 A[index] 上。然后，第 i 次查询的答案是 A 中偶数值的和。
    //
    //（此处给定的 index = queries[i][1] 是从 0 开始的索引，每次查询都会永久修改数组 A。）
    //
    //返回所有查询的答案。你的答案应当以数组 answer 给出，answer[i] 为第 i 次查询的答案。
    //
    // 
    //
    //示例：
    //
    //输入：A = [1,2,3,4], queries = [[1,0],[-3,1],[-4,0],[2,3]]
    //输出：[8,6,2,4]
    //解释：
    //开始时，数组为 [1,2,3,4]。
    //将 1 加到 A[0] 上之后，数组为 [2,2,3,4]，偶数值之和为 2 + 2 + 4 = 8。
    //将 -3 加到 A[1] 上之后，数组为 [2,-1,3,4]，偶数值之和为 2 + 4 = 6。
    //将 -4 加到 A[0] 上之后，数组为 [-2,-1,3,4]，偶数值之和为 -2 + 4 = 2。
    //将 2 加到 A[3] 上之后，数组为 [-2,-1,3,6]，偶数值之和为 -2 + 6 = 4。

    function sumEvenAfterQueries($A, $queries) {
        //首先查看原始的偶数和;
        $even_sum = 0;
        foreach ($A as $item) {
            $item % 2 == 0 && $even_sum += $item;
        }
        //根据查询的内容将数据
        $result = [];
        $queries_count = count($queries);
        for ($i = 0; $i < $queries_count; $i++) {
            $A[$queries[$i][1]] % 2 == 0 && $even_sum -= $A[$queries[$i][1]];
            $A[$queries[$i][1]] += $queries[$i][0];
            $A[$queries[$i][1]] % 2 == 0 && $even_sum += $A[$queries[$i][1]];
            $result[] = $even_sum;
        }
        return $result;
    }
}

$A = [1, 2, 3, 4];
$queries = [[1, 0], [-3, 1], [-4, 0], [2, 3]];
var_dump((new Solution())->sumEvenAfterQueries($A, $queries));