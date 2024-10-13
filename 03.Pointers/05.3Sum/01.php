<?php
// 15. 3Sum
// https://leetcode.com/problems/3sum/
// Runtime: 3527ms | 5.27%
// Memory: 28.18mb | 8.95%

class Solution
{
    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums)
    {
        $set = [];
        $flipped = array_flip($nums); // Num : Idx
        $total = count($nums);
        for ($i = 0; $i < $total; $i++) {
            for ($j = $i + 1; $j < $total; $j++) {
                $k = -1 * ($nums[$i] + $nums[$j]);
                if (
                    isset($flipped[$k]) &&
                    $i <> $flipped[$k] &&
                    $j <> $flipped[$k] &&
                    ($nums[$i] + $nums[$j] + $k) === 0
                ) {
                    $triple = [$nums[$i], $nums[$j], $k];
                    sort($triple);
                    $set[implode('', $triple)] = $triple;
                }
            }
        }
        return $set;
    }
}
