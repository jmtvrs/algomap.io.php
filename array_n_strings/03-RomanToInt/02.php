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
        // Runtime: 15ms | 60.56%
        // Memory: 19.10mb | 99.03%
        $integer = 0;

        $roman = str_replace('CM', '', $roman, $count1);
        $integer = $integer + ($count1 * 900);

        $roman = str_replace('CD', '', $roman, $count2);
        $integer = $integer + ($count2 * 400);

        $roman = str_replace('XC', '', $roman, $count3);
        $integer = $integer + ($count3 * 90);

        $roman = str_replace('XL', '', $roman, $count4);
        $integer = $integer + ($count4 * 40);

        $roman = str_replace('IX', '', $roman, $count5);
        $integer = $integer + ($count5 * 9);;

        $roman = str_replace('IV', '', $roman, $count6);
        $integer = $integer + ($count6 * 4);

        $roman = str_replace('I', '', $roman, $count7);
        $integer = $integer + ($count7 * 1);

        $roman = str_replace('V', '', $roman, $count8);
        $integer = $integer + ($count8 * 5);

        $roman = str_replace('X', '', $roman, $count9);
        $integer = $integer + ($count9 * 10);

        $roman = str_replace('L', '', $roman, $count10);
        $integer = $integer + ($count10 * 50);

        $roman = str_replace('C', '', $roman, $count10);
        $integer = $integer + ($count10 * 100);

        $roman = str_replace('D', '', $roman, $count11);
        $integer = $integer + ($count11 * 500);

        $roman = str_replace('M', '', $roman, $count12);
        $integer = $integer + ($count12 * 1000);

        return $integer;
    }
}
