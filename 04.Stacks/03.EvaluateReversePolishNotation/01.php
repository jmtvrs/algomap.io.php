<?php
// 150. Evaluate Reverse Polish Notation
// https://leetcode.com/problems/evaluate-reverse-polish-notation/
// Runtime: 16ms | 69.49%
// Memory: 21.50mb | 33.90%

class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    function evalRPN($tokens)
    {
        $stack = [];
        $validOperators = ['+', '-', '*', '/'];
        foreach ($tokens as $token) {
            if (intval($token)) {
                $stack[] = $token;
                continue;
            }

            if (in_array($token, $validOperators)) {
                $y = array_pop($stack);
                $x = array_pop($stack);
                $expr = "return ($x $token $y);";
                $res = eval($expr);
                $res = ($res > 0)  ? floor($res) : ceil($res);
                $stack[] = strval($res);

                continue;
            }

            $stack[] = 0;
        }

        return $stack[0];
    }
}
