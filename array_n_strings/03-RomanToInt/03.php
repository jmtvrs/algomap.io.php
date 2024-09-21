<?php
// 13. Roman to Integer
// https://leetcode.com/problems/roman-to-integer/

class Solution
{

    /**
     * @param String $roman
     * @return Integer
     */
    function romanToInt($roman)
    {
        // Runtime: 12ms | 76.84%
        // Memory: 19.12mb | 98.84%
        $integer = 0;

        $numerals = [
            'CM' => 900,
            'CD' => 400,
            'XC' => 90,
            'XL' => 40,
            'IX' => 9,
            'IV' => 4,
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        foreach ($numerals as $numeral => $value) {
            $roman = str_replace($numeral, '', $roman, $count);
            $integer = $integer + ($count * $value);
            $count = 0;
        }

        return $integer;
    }
}
