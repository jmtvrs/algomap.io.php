<?php
// 56. Merge Intervals
// https://leetcode.com/problems/merge-intervals/
// Runtime: 51ms | 85.45%
// Memory: 30.68mb | 17.27%

class Solution
{

    /**
     * @param int[][] $intervals
     * @return int[][]
     */
    function merge($intervals)
    {
        sort($intervals);

        $iM = 0;
        $merged = [
            [$intervals[0][0], $intervals[0][1]], //$iM = 0;
        ];
        $intCount = count($intervals);

        for ($i = 1; $i < $intCount; $i++) {
            $startM = $merged[$iM][0];
            $endM = $merged[$iM][1];
            $startI = $intervals[$i][0];
            $endI = $intervals[$i][1];
            if (
                $startM == $startI && $endM == $endI ||
                $startI > $startM && $endI < $endM
            ) {
                continue;
            }

            if ($endM >= $startI && $endM <= $endI) {
                $merged[$iM][1] = $endI;
            } else {
                $iM++;
                $merged[$iM] = [$startI, $endI];
            }
        }
        return $merged;
    }
}
