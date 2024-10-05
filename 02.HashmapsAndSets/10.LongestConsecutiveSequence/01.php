<?php
// 128. Longest Consecutive Sequence
// https://leetcode.com/problems/longest-consecutive-sequence/
// Runtime: 194ms | 28.87%
// Memory: 30.99mb | 41.55%

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
            } else {
                $longest = max($sequence, $longest);
                $sequence = 1;
            }
            $longest = max($sequence, $longest);
        }
        return $longest;
    }
}
