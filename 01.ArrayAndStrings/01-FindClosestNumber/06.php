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
        // Runtime 52ms - beats 24.24%
        // Memory 20.04mb - beats 53.03%
        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];
            if (abs($num) < abs($closest)) $closest = $num;
        }
        if ($closest < 0 && in_array(abs($closest), $nums)) {
            return abs($closest);
        }
        return $closest;
    }
}
