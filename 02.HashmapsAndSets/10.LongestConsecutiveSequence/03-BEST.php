<?php
// 128. Longest Consecutive Sequence
// https://leetcode.com/problems/longest-consecutive-sequence/
// Runtime: 130ms | 99.30%
// Memory: 29.39mb | 73.94%

class Solution
{
    /**
     * @param int[] $nums
     * @return int
     */
    function longestConsecutive($nums)
    {
        if (empty($nums)) return 0;

        $numSet = array_flip($nums);
        $longestStreak = 0;
        foreach ($numSet as $num => $key) {
            // check if previous number exists in array
            if (!isset($numSet[$num - 1])) {
                $currentNum = $num;
                $currentStreak = 1;
                // since it doesn't exist, starts a streak counter
                // and counts while the next number exists
                while (isset($numSet[$currentNum + 1])) {
                    $currentNum += 1;
                    $currentStreak += 1;
                }
                $longestStreak = max($longestStreak, $currentStreak);
            }
        }
        return $longestStreak;
    }
}
