<?php
// 1189. Maximum Number of Balloons
// https://leetcode.com/problems/maximum-number-of-balloons/
// Runtime: 8ms | 73.08%
// Memory: 19.69mb | 100%

class Solution
{

    /**
     * @param string $text
     * @return int
     */
    function maxNumberOfBalloons($text)
    {
        $chars = count_chars($text, 1);

        $b = $chars[98] ?? 0;
        $a = $chars[97] ?? 0;
        $l = floor(($chars[108] ?? 0) / 2);
        $o = floor(($chars[111] ?? 0) / 2);
        $n = $chars[110] ?? 0;

        return min($b, $a, $l, $o, $n);
    }
}
