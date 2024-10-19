<?php
// 150. Evaluate Reverse Polish Notation
// https://leetcode.com/problems/evaluate-reverse-polish-notation/
// Runtime: 15ms | 79.66%
// Memory: 21.49mb | 33.90%

class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    function evalRPN($tokens)
    {
        $stack = [];
        foreach ($tokens as $token) {
            if (intval($token)) {
                $stack[] = $token;
                continue;
            }

            if (
                $token === '+' ||
                $token === '-' ||
                $token === '*' ||
                $token === '/'
            ) {
                $y = array_pop($stack);
                $x = array_pop($stack);
                $expr = "return ($x $token $y);";
                $res = eval($expr);
                $stack[] = ($res > 0)  ? floor($res) : ceil($res);
                continue;
            }

            $stack[] = 0;
        }

        return $stack[0];
    }
}
