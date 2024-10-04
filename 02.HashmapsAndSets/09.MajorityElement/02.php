<?php
// 169. Majority Element
// https://leetcode.com/problems/majority-element/
// Runtime: 59ms | 86.12%
// Memory: 22.85mb | 88.56%

class Solution
{
    /**
     * @param int[] $nums
     * @return int
     */
    function majorityElement($nums)
    {
        $found = [];
        $max = $majority = 0;
        foreach ($nums as $num) {
            $found[$num] = isset($found[$num]) ? $found[$num] + 1 : 1;
            if ($found[$num] > $max) {
                $max = $found[$num];
                $majority = $num;
            }
        }
        return $majority;
    }
}
