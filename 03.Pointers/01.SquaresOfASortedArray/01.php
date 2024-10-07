<?php
// 977. Squares of a Sorted Array
// https://leetcode.com/problems/squares-of-a-sorted-array/
// Runtime: 65ms | 75.19%
// Memory: 21.10mb | 95.49%

class Solution
{
    /**
     * @param int[] $nums
     * @return int[]
     */
    function sortedSquares($nums)
    {
        $left = 0;
        $right = count($nums) - 1;
        $result = [];
        while ($left <= $right) {
            if (abs($nums[$left]) > abs($nums[$right])) {
                $result[] = $nums[$left] ** 2;
                $left++;
            } else {
                $result[] = $nums[$right] ** 2;
                $right--;
            }
        }

        return array_reverse($result);
    }
}
