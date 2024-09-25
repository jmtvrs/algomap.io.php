<?php
// 48. Rotate Image
// https://leetcode.com/problems/rotate-image/
// Runtime: 0ms | 100%
// Memory: 19.94mb | 67.53%

class Solution
{

    /**
     * @param int[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix)
    {
        $maxRows = count($matrix);

        // Transpose the matrix in-place by swapping elements above the diagonal
        for ($i = 0; $i < $maxRows; $i++) {
            for ($j = $i + 1; $j < $maxRows; $j++) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            }
        }

        // Swap columns from left to right
        for ($i = 0; $i < $maxRows; $i++) {
            for ($j = 0; $j < $maxRows / 2; $j++) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$i][$maxRows - $j - 1];
                $matrix[$i][$maxRows - $j - 1] = $temp;
            }
        }

        return $matrix;
    }
}
