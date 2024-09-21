<?php
// 1768. Merge Strings Alternately
// https://leetcode.com/problems/merge-strings-alternately/


class Solution
{

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2)
    {
        // Runtime: 3ms | 86.44%
        // Memory: 19.40mb | 98.82%
        $arr = [];
        $size = max(strlen($word1), strlen($word2));
        for ($i = 0; $i < $size; $i++) {
            $arr[] = $word1[$i] . $word2[$i];
        }
        return implode('', $arr);
    }
}
