<?php
// 344. Reverse String
// https://leetcode.com/problems/reverse-string/
// Runtime: 49ms | 67.39%
// Memory: 26.40mb | 16.67%

class Solution
{
    /**
     * @param string[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $left = 0;
        $right = count($s) - 1;
        while ($left <= $right) {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
    }
}
