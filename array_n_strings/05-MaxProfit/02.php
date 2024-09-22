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
        // Runtime: 291ms | 39.96%
        // Memory: 26.73mb | 60.20%
        $last = array_shift($prices);
        $profit = 0;
        foreach ($prices as $price) {
            if ($price > $last) {
                $profit = max($profit, ($price - $last));
            } else {
                $last = $price;
            }
        }
        return $profit;
    }
}
