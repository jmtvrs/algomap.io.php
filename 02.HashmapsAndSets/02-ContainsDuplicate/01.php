<?php
// 217. Contains Duplicate
// https://leetcode.com/problems/contains-duplicate/
// Runtime: 189ms | 20.63%
// Memory: 31.32mb | 14.33%

class Solution
{
    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate($nums)
    {
        $unq = array_unique($nums);
        return !(count($nums) === count($unq));
    }
}
