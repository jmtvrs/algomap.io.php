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
        // Runtime 43ms - beats 78.79%
        // Memory 20.07mb - beats 53.03%
        $size = count($nums);
        for ($i = 0; $i < $size; $i++) {
            $num = $nums[$i];
            $abs = abs($closest);
            if (abs($num) < $abs || $abs == $num) $closest = $num;
        }
        return $closest;
    }
}
