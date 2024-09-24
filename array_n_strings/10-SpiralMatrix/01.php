<?php
// 54. Spiral Matrix
// https://leetcode.com/problems/spiral-matrix/
// Runtime: 13ms | 7.89%
// Memory: 19.05mb | 100%

class Solution
{

    /**
     * @param int[][] $matrix
     * @return int[]
     */
    function spiralOrder($matrix)
    {
        $spiral = [];
        $maxRows = count($matrix);
        $maxCols = count($matrix[0]);
        $maxItems = $maxRows * $maxCols;
        $pos = [0, -1];
        $dir = 0;

        for ($i = 0; $i < $maxItems; $i++) {
            $checkPos = $pos;
            switch ($dir % 4) {
                case 0: // Right
                    $checkPos[1]++;
                    break;
                case 1: // Down
                    $checkPos[0]++;
                    break;
                case 2: // Left
                    $checkPos[1]--;
                    break;
                case 3: // Up
                    $checkPos[0]--;
                    break;
            }

            if (
                $checkPos[0] >= $maxRows
                || $checkPos[0] < 0
                || $checkPos[1] >= $maxCols
                || $checkPos[1] < 0
                || $matrix[$checkPos[0]][$checkPos[1]] == -99
            ) {
                $dir++;
                $i--;
                continue;
            }
            $pos = $checkPos;
            $spiral[] = $matrix[$pos[0]][$pos[1]];
            $matrix[$pos[0]][$pos[1]] = -99;
        }

        return $spiral;
    }
}
