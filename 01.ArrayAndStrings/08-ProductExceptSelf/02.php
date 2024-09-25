<?php
// 238. Product of Array Except Self
// https://leetcode.com/problems/product-of-array-except-self/
// Runtime: 104ms | 83.80%
// Memory: 31.67mb | 28.24%

class Solution
{

    /**
     * @param int[] $nums
     * @return int[]
     */
    function productExceptSelf($nums)
    {
        // [1,2,3,4]
        $numCount = count($nums);
        $products = [];
        $temp = 1;
        for ($i = 0; $i < $numCount; $i++) {
            $products[$i] = $temp;
            $temp *= $nums[$i];
            // 0, [1] | 1
            // 1, [1,1] | 2
            // 2, [1,1,2] | 6
            // 3, [1,1,2,6] | 
        }

        $temp = 1;
        for ($i = $numCount - 1; $i >= 0; $i--) {
            $products[$i] *= $temp;
            $temp *= $nums[$i];

            // 3, [1,1,2,6] | 4
            // 2, [1,1,8,6] | 12
            // 1, [1,12,8,6] | 24
            // 0, [24,12,8,6] | 
        }

        return $products;
    }
}
