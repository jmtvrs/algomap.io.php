<?php
// 242. Valid Anagram
// https://leetcode.com/problems/valid-anagram/
// Runtime: 12ms | 71.52%
// Memory: 19.94mb | 92.56%

class Solution
{

    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return bool
     */
    function isAnagram($s, $t)
    {
        return (count_chars($s, 1) == count_chars($t, 1));
    }
}
