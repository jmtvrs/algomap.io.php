<?php
// 74. Search a 2D Matrix
// https://leetcode.com/problems/search-a-2d-matrix/
// Runtime: 0ms | 100%
// Memory: 20.40mb | 40%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{

    /**
     * @param int $num
     * @return bool
     */
    function searchMatrix($matrix, $target)
    {
        $m = count($matrix);
        $n = count($matrix[0]);
        $l = 0;
        $r = ($m * $n) - 1;

        while ($l <= $r) {
            $mid = $l + floor(($r - $l) / 2);
            $i = floor($mid / $n);
            $j = $mid % $n;
            $midNum = $matrix[$i][$j];

            if ($target === $midNum) {
                return true;
            } else if ($target < $midNum) {
                $r = $mid - 1;
            } else {
                $l = $mid + 1;
            }
        }

        return false;
    }
}
