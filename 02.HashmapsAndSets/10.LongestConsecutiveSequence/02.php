<?php
// 128. Longest Consecutive Sequence
// https://leetcode.com/problems/longest-consecutive-sequence/
// Runtime: 173ms | 54.22%
// Memory: 31.04mb | 34.51%

class Solution
{
    /**
     * @param int[] $nums
     * @return int
     */
    function longestConsecutive($nums)
    {
        if (empty($nums)) return 0;

        sort($nums);
        $sequence = $longest = 1;
        $count = count($nums);
        for ($i = 1; $i < $count; $i++) {
            if ($nums[$i] === $nums[$i - 1]) {
                continue;
            }
            if ($nums[$i] === $nums[$i - 1] + 1) {
                $sequence++;
                continue;
            }
            $longest = max($sequence, $longest);
            $sequence = 1;
        }
        $longest = max($sequence, $longest);

        return $longest;
    }
}
