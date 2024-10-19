<?php
// 150. Evaluate Reverse Polish Notation
// https://leetcode.com/problems/evaluate-reverse-polish-notation/
// Runtime: 1ms | 100%
// Memory: 21.08mb | 83.05%

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
            if (is_numeric($token)) {
                $stack[] = (int)$token;
                continue;
            } else {
                $a = array_pop($stack);
                $b = array_pop($stack);
            }

            switch ($token) {
                case '-':
                    $stack[] = $b - $a;
                    break;
                case '+':
                    $stack[] = $a + $b;
                    break;
                case '/':
                    $stack[] = intval($b / $a);
                    break;
                case '*';
                    $stack[] = $a * $b;
                    break;
            }
        }

        return $stack[0];
    }
}
