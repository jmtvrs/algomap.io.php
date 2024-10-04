<?php
// 49. Group Anagrams
// https://leetcode.com/problems/group-anagrams/
// Runtime: 30ms | 86.18%
// Memory: 24.19mb | 71.71%

class Solution
{
    /**
     * @param string[] $strs
     * @return string[][]
     */
    function groupAnagrams($strs)
    {
        $anagrams = [];
        foreach ($strs as $str) {
            $key = str_split($str);
            sort($key);
            $key = implode('', $key);
            $anagrams[$key][] = $str;
        }
        return $anagrams;
    }
}
