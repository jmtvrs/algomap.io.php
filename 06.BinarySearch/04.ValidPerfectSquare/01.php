<?php
// 367. Valid Perfect Square
// https://leetcode.com/problems/valid-perfect-square/
// Runtime: 0ms | 100%
// Memory: 20.07mb | 36.96%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{

    /**
     * @param int $num
     * @return bool
     */
    function isPerfectSquare($num)
    {
        $l = 1;
        $r = $num;

        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);
            $sqrt = $m * $m;

            if ($sqrt == $num) {
                return true;
            } elseif ($sqrt > $num) {
                $r = $m - 1;
            } else {
                $l = $m + 1;
            }
        }

        return false;
    }
}
