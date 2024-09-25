<?php
// 2239. Find Closest Number to Zero
// https://leetcode.com/problems/find-closest-number-to-zero/

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function findClosestNumber($nums)
    {
        $closest = $nums[0];
        // Runtime 50ms - beats 34.85%
        // Memory 19.18mb - beats 100%
        foreach ($nums as $num) {
            if (abs($num) < abs($closest) || abs($closest) == $num) $closest = $num;
        }
        return $closest;
    }
}
