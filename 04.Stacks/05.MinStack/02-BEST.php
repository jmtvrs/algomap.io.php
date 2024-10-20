<?php
// 155. Min Stack
// https://leetcode.com/problems/min-stack/
// Runtime: 3ms | 100.00%
// Memory: 25.71mb | 8.82%

class MinStack
{
    private $stack;
    private $size;
    private $min;
    /**
     */
    function __construct()
    {
        $this->stack = [];
        $this->size = 0;
        $this->min = PHP_INT_MAX;
    }

    /**
     * @param int $val
     * @return null
     */
    function push($val)
    {
        $this->size++;
        if ($val < $this->min || $this->size === 1) {
            $this->min = $val;
        }
        $this->stack[] = [$val, $this->min];
    }

    /**
     * @return null
     */
    function pop()
    {
        unset($this->stack[$this->size - 1]);
        $this->stack = array_values($this->stack);
        $this->size--;
        $this->min = $this->stack[$this->size - 1][1];
    }

    /**
     * @return int
     */
    function top()
    {
        return $this->stack[$this->size - 1][0];
    }

    /**
     * @return int
     */
    function getMin()
    {
        return $this->stack[$this->size - 1][1];
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
