<?php

class LRUCache {
    /**
     * @param Integer $capacity
     */
    //
    private $_data;
    private $_capacity;
    function __construct($capacity) {
        $this->_capacity=$capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        return $this->_data[$key];
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {

    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */