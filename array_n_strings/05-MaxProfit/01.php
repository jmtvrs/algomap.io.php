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
        // Runtime: 271ms | 84.94%
        // Memory: 26.84mb | 40.15%
        $pSize = count($prices);
        $profit = 0;
        $buy = $prices[0];
        for ($i = 1; $i < $pSize; $i++) {
            $curr = $prices[$i];
            if ($curr > $buy) {
                $profit = max($profit, ($curr - $buy));
            } else {
                $buy = $curr;
            }
        }

        return $profit;
    }
}
