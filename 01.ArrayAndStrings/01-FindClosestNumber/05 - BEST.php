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
        // Runtime 38ms - beats 95.45%
        // Memory 20.28mb - beats 12.12%
        foreach ($nums as $num) {
            $abs_n = abs($num);
            $abs_c = abs($closest);
            if ($abs_n < $abs_c || $abs_c == $num) $closest = $num;
        }
        return $closest;
    }
}
