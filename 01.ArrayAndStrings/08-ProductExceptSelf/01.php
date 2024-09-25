<?php
// 238. Product of Array Except Self
// https://leetcode.com/problems/product-of-array-except-self/
// Runtime: 102ms | 88.43%
// Memory: 30.87mb | 98.61%

class Solution
{

    /**
     * @param int[] $nums
     * @return int[]
     */
    function productExceptSelf($nums)
    {

        $numCount = count($nums);
        $products = array_fill(0, $numCount, 1);

        foreach (range(1, $numCount - 1) as $i) {
            $products[$i] = $products[$i - 1] * $nums[$i - 1];
        }

        $right = end($nums);
        foreach (range($numCount - 2, 0, -1) as $i) {
            $products[$i] *= $right;
            $right *= $nums[$i];
        }

        return $products;
    }
}
