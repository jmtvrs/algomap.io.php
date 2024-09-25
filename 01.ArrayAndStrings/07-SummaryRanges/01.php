<?php
// 228. Summary Ranges
// https://leetcode.com/problems/summary-ranges/

class Solution
{
    // Runtime: 0ms | 100.00%
    // Memory: 20.02 | 41.75%
    /**
     * @param int[] $nums
     * @return string[]
     */
    function summaryRanges($nums)
    {
        if (empty($nums)) return $nums;

        $ranges = [];
        $min = $max = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if (($nums[$i] - $nums[$i - 1]) > 1) {
                $ranges[] = $min === $nums[$i - 1] ? (string)$min : "$min->" . $nums[$i - 1];
                $min = $nums[$i];
            }
            $max = $nums[$i];
        }
        $ranges[] = $min === $max ? (string)$min : "$min->$max";

        return $ranges;
    }
}
