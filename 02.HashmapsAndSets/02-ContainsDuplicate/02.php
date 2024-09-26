<?php
// 217. Contains Duplicate
// https://leetcode.com/problems/contains-duplicate/
// Runtime: 180ms | 39.83%
// Memory: 26.08mb | 97.99%

class Solution
{
    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate($nums)
    {
        $hits = array_count_values($nums);
        $duplicates = array_filter($hits, function ($n) {
            return $n > 1;
        });

        return count($duplicates) > 0;
    }
}
