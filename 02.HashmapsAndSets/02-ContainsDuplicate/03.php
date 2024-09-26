<?php
// 217. Contains Duplicate
// https://leetcode.com/problems/contains-duplicate/
// Runtime: 169ms | 71.63%
// Memory: 26.07mb | 97.99%

class Solution
{
    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate($nums)
    {
        $tempArr = [];

        foreach ($nums as $num) {
            if (isset($tempArr[$num])) return true;
            $tempArr[$num] = 1;
        }

        return false;
    }
}
