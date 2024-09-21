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
        // Runtime 49ms - beats 42.42%
        // Memory 19.84mb - beats 85.61%
        foreach ($nums as $num) {
            if (abs($num) < abs($closest)) $closest = $num;
            if (abs($closest) == $num) $closest = $num;
        }
        return $closest;
    }
}
