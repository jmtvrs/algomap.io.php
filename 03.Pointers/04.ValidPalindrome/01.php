<?php
// 125. Valid Palindrome
// https://leetcode.com/problems/valid-palindrome/
// Runtime: 14ms | 38.48%
// Memory: 22.97mb | 13.33%

class Solution
{
    /**
     * @param string $s
     * @return bool
     */
    function isPalindrome($s)
    {
        $cleanedString = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $s));
        $array = str_split($cleanedString);
        $left = 0;
        $right = count($array) - 1;
        while ($left <= $right) {
            if ($array[$left] !== $array[$right]) {
                return false;
            }
            $right--;
            $left++;
        }
        return true;
    }
}
