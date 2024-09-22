<?php
// 14. Longest Common Prefix
// https://leetcode.com/problems/longest-common-prefix/

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        // Runtime: 11ms | 35.58%
        // Memory: 19.23mb | 99.55%

        if (empty($strs)) return "";

        $prefix = $strs[0];
        $firstStrLen = strlen($prefix);
        $wordCount = count($strs);

        for ($l = 0; $l < $firstStrLen; $l++) {
            for ($w = 1; $w < $wordCount; $w++) {
                if ($l == strlen($strs[$w]) || $strs[$w][$l] != $prefix[$l]) {
                    return substr($prefix, 0, $l);
                }
            }
        }

        return $prefix;
    }
}
