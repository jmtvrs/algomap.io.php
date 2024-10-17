<?php
// 682. Baseball Game
// https://leetcode.com/problems/baseball-game/
// Runtime: 0ms | 100%
// Memory: 20.12mb | 31.25%

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
                case 'C':
                    array_pop($stack);
                    break;
                case '+':
                    $n = count($stack);
                    $stack[] = $stack[$n - 2] + $stack[$n - 1];
                    break;
                case 'D':
                    $n = count($stack);
                    $stack[] = $stack[$n - 1] * 2;
                    break;
                default:
                    $stack[] = (int)$op;
                    break;
            }
        }
        return array_sum($stack);
    }
}
