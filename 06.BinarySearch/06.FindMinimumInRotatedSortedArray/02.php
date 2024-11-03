<?php
// 153. Find Minimum in Rotated Sorted Array
// https://leetcode.com/problems/find-minimum-in-rotated-sorted-array/
// Runtime: 0ms | 100%
// Memory: 20.47mb | 9.09%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function findMin($nums)
    {
        $l = 0;
        $r = count($nums) - 1;
        while ($l < $r) {
            $m = $l + floor(($r - $l) / 2);
            if ($nums[$m] > $nums[$r]) {
                $l = $m + 1;
            } else {
                $r = $m;
            }
        }
        return $nums[$l];
    }
}
