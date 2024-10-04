<?php
// 169. Majority Element
// https://leetcode.com/problems/majority-element/
// Runtime: 79ms | 7.13%
// Memory: 23.03mb | 69.04%

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function majorityElement($nums)
    {
        $found = [];
        foreach ($nums as $num) {
            $found[$num] = isset($found[$num]) ? $found[$num] + 1 : 1;
        }
        return array_keys($found, max($found))[0];
    }
}
