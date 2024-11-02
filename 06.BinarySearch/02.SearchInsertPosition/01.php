<?php
// 35. Search Insert Position
// https://leetcode.com/problems/search-insert-position/
// Runtime: 0ms | 100%
// Memory: 20.27mb | 49.87%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{

    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function searchInsert($nums, $target)
    {
        $l = 0;
        $r = count($nums) - 1;
        $i = 0;
        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);

            if ($nums[$m] === $target) {
                return $m;
            } elseif ($target < $nums[$m]) {
                $i = $m;
                $r = $m - 1;
            } else {
                $l = $m + 1;
                $i = $l;
            }
        }

        return $i;
    }
}
