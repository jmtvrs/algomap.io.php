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
        // Runtime: 10ms | 85.08%
        // Memory: 20.06mb | 36.14%
        $integer = 0;
        for ($i = 0; $i < strlen($roman); $i++) {
            if ($roman[$i] == 'I' && $roman[$i + 1] == 'V') {
                $integer += 4;
                $i++;
                continue;
            } else if ($roman[$i] == 'I' && $roman[$i + 1] == 'X') {
                $integer += 9;
                $i++;
                continue;
            } else if ($roman[$i] == 'X' && $roman[$i + 1] == 'L') {
                $integer += 40;
                $i++;
                continue;
            } else if ($roman[$i] == 'X' && $roman[$i + 1] == 'C') {
                $integer += 90;
                $i++;
                continue;
            } else if ($roman[$i] == 'C' && $roman[$i + 1] == 'D') {
                $integer += 400;
                $i++;
                continue;
            } else if ($roman[$i] == 'C' && $roman[$i + 1] == 'M') {
                $integer += 900;
                $i++;
                continue;
            }

            switch ($roman[$i]) {
                case 'I':
                    $integer += 1;
                    break;
                case 'V':
                    $integer += 5;
                    break;
                case 'X':
                    $integer += 10;
                    break;
                case 'L':
                    $integer += 50;
                    break;
                case 'C':
                    $integer += 100;
                    break;
                case 'D':
                    $integer += 500;
                    break;
                case 'M':
                    $integer += 1000;
                    break;
            }
        }
        return $integer;
    }
}
