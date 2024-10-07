<?php
// 167. Two Sum II - Input Array Is Sorted
// https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/
// Runtime: 35ms | 70.77%
// Memory: 21.39mb | 77.69%

class Solution
{
    /**
     * @param int[] $numbers
     * @param int $target
     * @return int[]
     */
    function twoSum($numbers, $target)
    {
        $left = 0;
        $right = count($numbers) - 1;
        while ($left <= $right) {
            $sum = $numbers[$left] + $numbers[$right];
            if ($sum === $target) {
                break;
            }
            if ($sum > $target) {
                $right--;
            } else {
                $left++;
            }
        }
        return [$left + 1, $right + 1];
    }
}
