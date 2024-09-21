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
        // Runtime 48ms - beats 51.52%
        // Memory 19.68mb - beats 97.73%
        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];
            if (abs($num) < abs($closest) || abs($closest) == $num) $closest = $num;
        }
        return $closest;
    }
}
