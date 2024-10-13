<?php
// 42. Trapping Rain Water
// https://leetcode.com/problems/trapping-rain-water/
// Runtime: 31ms | 98.59%
// Memory: 21.38mb | 69.01%

class Solution
{
    /**
     * @param int[] $height
     * @return int
     */
    function trap($height)
    {
        $end = count($height) - 1;
        $highest = array_keys($height, max($height))[0]; // the highest wall
        $trapped = 0;

        // left - right check
        $f = 0; // first cursor
        $s = 1; // second cursor    
        while ($s < $highest) {
            if ($height[$f] == 0) {
                $f++;
                $s++;
                continue;
            }

            if ($height[$f] > $height[$s]) {
                $trapped += $height[$f] - $height[$s];
            } else {
                $f = $s;
                $s = $f + 1;
                continue;
            }

            $s++;
        }

        // right - left check
        $f = $end; // first cursor
        $s = $end - 1; // second cursor
        while ($s > $highest) {
            if ($height[$f] == 0) {
                $f--;
                $s--;
                continue;
            }

            if ($height[$f] > $height[$s]) {
                $trapped += $height[$f] - $height[$s];
            } else {
                $f = $s;
                $s = $f - 1;
                continue;
            }

            $s--;
        }

        return $trapped;
    }
}
