<?php
// 121. Best Time to Buy and Sell Stock
// https://leetcode.com/problems/best-time-to-buy-and-sell-stock/

class Solution
{
    /**
     * @param int[] $prices
     * @return int
     */
    function maxProfit($prices)
    {
        // Runtime: 268ms | 88.80%
        // Memory: 26.77mb | 61.20%
        $pSize = count($prices);
        $profit = 0;
        $last = $prices[0];
        for ($i = 1; $i < $pSize; $i++) {
            $c = $prices[$i];
            if ($c < $last) {
                $last = $c;
            } else if ($c - $last > $profit) {
                $profit = $c - $last;
            }
        }
        return $profit;
    }
}
