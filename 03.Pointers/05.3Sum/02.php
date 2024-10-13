<?php
// 15. 3Sum
// https://leetcode.com/problems/3sum/
// Runtime: 291ms | 42.11%
// Memory: 26.96mb | 74.74%

class Solution
{
    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums)
    {
        $set = [];
        sort($nums);
        $total = count($nums);
        for ($i = 0; $i < $total; $i++) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            $left = $i + 1;
            $right = $total - 1;

            while ($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
                if ($sum === 0) {
                    $set[] = [$nums[$i], $nums[$left], $nums[$right]];
                    while ($left < $right && $nums[$left] === $nums[$left + 1]) $left++;
                    while ($left < $right && $nums[$right] === $nums[$right - 1]) $right--;
                    $left++;
                    $right--;
                } elseif ($sum < 0) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }
        return $set;
    }
}
