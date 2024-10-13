<?php
// 11. Container With Most Water
// https://leetcode.com/problems/container-with-most-water
// Runtime: 192ms | 81.12%
// Memory: 26.25mb | 95.71%

class Solution
{
    /**
     * @param int[] $height
     * @return int
     */
    function maxArea($heights)
    {
        $left = 0;
        $right = count($heights) - 1;
        $area = 0;
        while ($left <= $right) {
            $height = min($heights[$left], $heights[$right]);
            $length = $right - $left;
            $area = max($area, ($height * $length));
            if ($heights[$left] > $heights[$right]) {
                $right--;
            } else {
                $left++;
            }
        }
        return $area;
    }
}
