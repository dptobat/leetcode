<?php

class Solution {

    /**
     * @param String $name
     * @param String $typed
     * @return Boolean
     */

    function isLongPressedName($name, $typed) {
        //判断$typed中出现字符的次数要大于$name中的;
        $name_length=strlen($name);
        $typed_length=strlen($typed);

    }
}
$name="laiden";$typed='laiden';
var_dump((new Solution())->isLongPressedName($name,$typed));