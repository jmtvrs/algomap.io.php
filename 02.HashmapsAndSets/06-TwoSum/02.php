<?php
// 1. Two Sum
// https://leetcode.com/problems/two-sum/
// Runtime: 9ms | 97.67%
// Memory: 20.90mb | 5.91%

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        // Using HashMap -->O(n)
        $map = [];
        foreach ($nums as $key => $num) {
            $c = $target - $num;
            if (isset($map[$num])) {
                return [$map[$num], $key];
            }
            $map[$c] = $key;
        }
        return [];
    }
}
