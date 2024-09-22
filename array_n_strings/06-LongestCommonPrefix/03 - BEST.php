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
        // Runtime: 10ms | 42.15%
        // Memory: 19.90mb | 75.93%

        if (empty($strs)) return "";

        $prefix = $strs[0];
        $wordCount = count($strs);
        for ($w = 1; $w < $wordCount; $w++) {
            while (strpos($strs[$w], $prefix) !== 0) {
                $prefix = substr($prefix, 0, -1);
                if ($prefix === "") {
                    return "";
                }
            }
        }
        return $prefix;
    }
}
