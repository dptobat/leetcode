<?php

class Solution {

    /**
     * @param String $path
     * @return String
     */
    function simplifyPath($path) {
        //使用一个数组记录/的索引
        $path_length=strlen($path);

    }
}
$path="/a/./b/../../c/";
var_dump((new Solution())->simplifyPath($path));