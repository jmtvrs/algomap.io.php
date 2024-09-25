<?php
// 228. Summary Ranges
// https://leetcode.com/problems/summary-ranges/

class Solution
{
    // Runtime: 5ms | 64.08%
    // Memory: 19.74 | 94.17%
    /**
     * @param int[] $nums
     * @return string[]
     */
    function summaryRanges($nums)
    {
        $n = count($nums);
        $ranges = [];
        $i = 0;

        while ($i < $n) {
            $start = $nums[$i];

            // Move to the end of the current range
            while ($i + 1 < $n && $nums[$i + 1] == $nums[$i] + 1) {
                $i++;
            }

            // If start and end are the same, it's a single number
            if ($start != $nums[$i]) {
                $ranges[] = "$start->$nums[$i]";
            } else {
                $ranges[] = (string)$start;
            }
            $i++;
        }

        return $ranges;
    }
}
