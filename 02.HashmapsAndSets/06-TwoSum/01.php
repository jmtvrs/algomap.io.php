<?php
// 1. Two Sum
// https://leetcode.com/problems/two-sum/
// Runtime: 746ms | 39.88%
// Memory: 20.44mb | 31.67%

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        // Brute force -->O(n2)
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }

        return [];
    }
}
