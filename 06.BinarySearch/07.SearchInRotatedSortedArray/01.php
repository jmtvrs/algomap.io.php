<?php
// 33. Search in Rotated Sorted Array
// https://leetcode.com/problems/search-in-rotated-sorted-array/
// Runtime: 0ms | 100%
// Memory: 19.89mb | 78.10%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function search($nums, $target)
    {
        $l = 0;
        $n = count($nums);
        $r = $n - 1;
        while ($l < $r) {
            $m = $l + floor(($r - $l) / 2);
            if ($nums[$m] > $nums[$r]) {
                $l = $m + 1;
            } else {
                $r = $m;
            }
        }

        $minIndex = $l;

        if ($minIndex === 0) {
            $l = 0;
            $r = $n - 1;
        } else if ($target >= $nums[0] && $target <= $nums[$minIndex - 1]) {
            $l = 0;
            $r = $minIndex - 1;
        } else {
            $l = $minIndex;
            $r = $n - 1;
        }

        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);
            if ($nums[$m] === $target) {
                return $m;
            } else if ($nums[$m] < $target) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }

        return -1;
    }
}
