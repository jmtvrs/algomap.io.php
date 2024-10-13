<?php
// 42. Trapping Rain Water
// https://leetcode.com/problems/trapping-rain-water/
// Runtime: 38ms | 64.79%
// Memory: 22.40mb | 5.63%

class Solution
{
    /**
     * @param int[] $height
     * @return int
     */
    function trap($heights)
    {
        $left = [];
        $right = [];
        $total = count($heights);
        // Max left to right
        $max = 0;
        for ($i = 0; $i < $total; $i++) {
            $max = max($max, $heights[$i]);
            $left[] = $max;
        }

        // Max right to left
        $max = 0;
        for ($i = $total - 1; $i >= 0; $i--) {
            // echo "i = $i", PHP_EOL;
            $max = max($max, $heights[$i]);
            $right[$i] = $max;
        }

        // Min of 2 Max minus the height
        $trapped = 0;
        for ($i = $total - 1; $i >= 0; $i--) {
            $trapped += min($left[$i], $right[$i]) - $heights[$i];
        }

        return $trapped;
    }
}
