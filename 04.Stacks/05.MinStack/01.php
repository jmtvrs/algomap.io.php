<?php
// 155. Min Stack
// https://leetcode.com/problems/min-stack/
// Runtime: 213ms | 35.29%
// Memory: 23.34mb | 88.24%

class MinStack
{
    /**
     */
    function __construct(private array $stack = []) {}

    /**
     * @param int $val
     * @return null
     */
    function push($val)
    {
        $this->stack[] = $val;
    }

    /**
     * @return null
     */
    function pop()
    {
        array_pop($this->stack);
    }

    /**
     * @return int
     */
    function top()
    {
        return end($this->stack);
    }

    /**
     * @return int
     */
    function getMin()
    {
        return min($this->stack);
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($val);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
