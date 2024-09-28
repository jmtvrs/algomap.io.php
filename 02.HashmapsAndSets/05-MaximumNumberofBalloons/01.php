<?php
// 1189. Maximum Number of Balloons
// https://leetcode.com/problems/maximum-number-of-balloons/
// Runtime: 13ms | 30.77%
// Memory: 20.55mb | 23.08%

class Solution
{

    /**
     * @param string $text
     * @return int
     */
    function maxNumberOfBalloons($text)
    {
        $charCount = array_count_values(str_split($text));

        $b = $charCount['b'] ?? 0;
        $a = $charCount['a'] ?? 0;
        $l = floor(($charCount['l'] ?? 0) / 2);
        $o = floor(($charCount['o'] ?? 0) / 2);
        $n = $charCount['n'] ?? 0;

        return min($b, $a, $l, $o, $n);
    }
}
