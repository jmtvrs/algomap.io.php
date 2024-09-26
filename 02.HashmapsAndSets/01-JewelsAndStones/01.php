<?php
// 771. Jewels and Stones
// https://leetcode.com/problems/jewels-and-stones/
// Runtime: 5ms | 73.17%
// Memory: 19.43mb | 96.34%

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
        $jLen = strlen($jewels);
        $sLen = strlen($stones);
        for ($j = 0; $j < $jLen; $j++) {
            for ($s = 0; $s < $sLen; $s++) {
                if ($stones[$s] === $jewels[$j]) {
                    $count++;
                }
            }
        }
        return $count;
    }
}
