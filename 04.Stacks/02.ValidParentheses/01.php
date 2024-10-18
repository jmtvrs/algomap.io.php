<?php
// 20. Valid Parentheses
// https://leetcode.com/problems/baseball-game/
// Runtime: 1ms | 90.29%
// Memory: 19.97mb | 67.24%

class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    function isValid($s)
    {
        $p = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (
                $s[$i] === '(' ||
                $s[$i] === '{' ||
                $s[$i] === '['
            ) {
                $p[] = $s[$i];
                continue;
            }

            if ($s[$i] === ')') {
                $lookFor = '(';
            } else if ($s[$i] === '}') {
                $lookFor = '{';
            } else if ($s[$i] === ']') {
                $lookFor = '[';
            }

            if (end($p) === $lookFor) {
                array_pop($p);
                continue;
            }
            $p[] = $s[$i];
        }

        return count($p) <= 0;
    }
}
