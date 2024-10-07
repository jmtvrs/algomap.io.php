<?php
// 125. Valid Palindrome
// https://leetcode.com/problems/valid-palindrome/
// Runtime: 11ms | 57.40%
// Memory: 20.03mb | 90.03%

class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    function isPalindrome($s)
    {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left <= $right) {
            if (!ctype_alnum($s[$left])) {
                $left++;
                continue;
            }
            if (!ctype_alnum($s[$right])) {
                $right--;
                continue;
            }
            if (strtolower($s[$left]) != strtolower($s[$right])) return false;
            $left++;
            $right--;
        }
        return true;
    }
}
