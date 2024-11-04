<?php
// 875. Koko Eating Bananas
// https://leetcode.com/problems/koko-eating-bananas/
// Runtime: 78ms | 100%
// Memory: 20.90mb | 80.85%
// Time: O(log N) | Space: O(1) - Constant number of variables

class Solution
{

    function canFinish($k, $piles, $h)
    {
        $hours = 0;
        foreach ($piles as $pile) {
            $hours += ceil($pile / $k);
        }
        return $hours <= $h;
    }

    /**
     * @param int[] $piles
     * @param int $h
     * @return int
     */
    function minEatingSpeed($piles, $h)
    {

        $l = 1;
        $r = max($piles);

        while ($l < $r) {
            $m = $l + floor(($r - $l) / 2);

            if ($this->canFinish($m, $piles, $h)) {
                $r = $m;
            } else {
                $l = $m + 1;
            }
        }

        return $l;
    }
}
