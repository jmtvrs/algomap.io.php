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
        // Runtime: 8ms | 46.53%
        // Memory: 19.95mb | 58.22%
        $arr1 = str_split($word1);
        $arr2 = str_split($word2);
        $size = max(count($arr1), count($arr2));
        $arr = [];
        for ($i = 0; $i < $size; $i++) {
            $arr[] = $arr1[$i] . $arr2[$i];
        }
        return implode('', $arr);
    }
}
