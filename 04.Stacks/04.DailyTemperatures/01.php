<?php
// 739. Daily Temperatures
// https://leetcode.com/problems/daily-temperatures/
// Runtime: 128ms | 100.00%
// Memory: 52.20mb | 11.11%

class Solution
{
    /**
     * @param int[] $temperatures
     * @return int[]
     */
    function dailyTemperatures($temperatures)
    {
        $total = count($temperatures);
        $answer = array_fill(0, $total, 0);
        $stack = [];

        for ($i = 0; $i < $total; $i++) {
            $temperature = $temperatures[$i];
            while (count($stack) > 0 && $stack[count($stack) - 1][0] < $temperature) {
                list($stkTemp, $stkIdx) = array_pop($stack);
                $answer[$stkIdx] = $i - $stkIdx;
            }
            $stack[] = [$temperature, $i];
        }

        return $answer;
    }
}
