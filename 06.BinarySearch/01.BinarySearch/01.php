<?php
// 704. Binary Search
// https://leetcode.com/problems/binary-search/
// Runtime: 0ms | 100%
// Memory: 21.07mb | 52.84%
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
        // Tradicional
        $l = 0;
        $r = count($nums) - 1;
        //$m = floor(($l-$r)/2); // this could lead to integer overflow when dealing with big integers
        $m = $l + floor(($r - $l) / 2);

        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);

            if ($nums[$m] === $target) {
                return $m;
            } elseif ($target < $nums[$m]) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }

        return -1;
    }
}
