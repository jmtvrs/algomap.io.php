<?php
// 771. Jewels and Stones
// https://leetcode.com/problems/jewels-and-stones/
// Runtime: 0ms | 100%
// Memory: 20.23mb | 8.54%

class Solution
{
    /**
     * @param string $jewels
     * @param string $stones
     * @return int
     */
    function numJewelsInStones($jewels, $stones)
    {
        $count = 0;
        $jewels = str_split($jewels);
        $stones = str_split($stones);
        $count = 0;
        foreach ($jewels as $jewel) {
            foreach ($stones as $stone) {
                if ($jewel == $stone) {
                    $count++;
                }
            }
        }
        return $count;
    }
}
