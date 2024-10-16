<?php
// 682. Baseball Game
// https://leetcode.com/problems/baseball-game/
// Runtime: 7ms | 77.08%
// Memory: 19.89mb | 75.00%

class Solution
{
    /**
     * @param string[] $operations
     * @return int
     */
    function calPoints($operations)
    {
        $stack = [];
        foreach ($operations as $i => $op) {
            switch ($op) {
                case '+':
                    $last = end($stack);
                    $secondToLast = prev($stack);
                    $stack[] = $secondToLast + $last;
                    break;
                case 'D':
                    $last = end($stack);
                    $stack[] = $last * 2;
                    break;
                case 'C':
                    array_pop($stack);
                    break;
                default:
                    $stack[] = (int)$op;
                    break;
            }
        }
        return array_sum($stack);
    }
}
