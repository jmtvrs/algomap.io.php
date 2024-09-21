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
        // // Runtime: 10ms | 85.08%
        // // Memory: 20.06mb | 36.14%
        // $integer = 0;
        // for ($i = 0; $i < strlen($roman); $i++) {
        //     if ($roman[$i] == 'I' && $roman[$i + 1] == 'V') {
        //         $integer += 4;
        //         $i++;
        //         continue;
        //     } else if ($roman[$i] == 'I' && $roman[$i + 1] == 'X') {
        //         $integer += 9;
        //         $i++;
        //         continue;
        //     } else if ($roman[$i] == 'X' && $roman[$i + 1] == 'L') {
        //         $integer += 40;
        //         $i++;
        //         continue;
        //     } else if ($roman[$i] == 'X' && $roman[$i + 1] == 'C') {
        //         $integer += 90;
        //         $i++;
        //         continue;
        //     } else if ($roman[$i] == 'C' && $roman[$i + 1] == 'D') {
        //         $integer += 400;
        //         $i++;
        //         continue;
        //     } else if ($roman[$i] == 'C' && $roman[$i + 1] == 'M') {
        //         $integer += 900;
        //         $i++;
        //         continue;
        //     }

        //     switch ($roman[$i]) {
        //         case 'I':
        //             $integer += 1;
        //             break;
        //         case 'V':
        //             $integer += 5;
        //             break;
        //         case 'X':
        //             $integer += 10;
        //             break;
        //         case 'L':
        //             $integer += 50;
        //             break;
        //         case 'C':
        //             $integer += 100;
        //             break;
        //         case 'D':
        //             $integer += 500;
        //             break;
        //         case 'M':
        //             $integer += 1000;
        //             break;
        //     }
        // }
        // return $integer;


        // // Runtime: 15ms | 60.56%
        // // Memory: 19.10mb | 99.03%
        // $integer = 0;

        // $roman = str_replace('CM', '', $roman, $count1);
        // $integer = $integer + ($count1 * 900);

        // $roman = str_replace('CD', '', $roman, $count2);
        // $integer = $integer + ($count2 * 400);

        // $roman = str_replace('XC', '', $roman, $count3);
        // $integer = $integer + ($count3 * 90);

        // $roman = str_replace('XL', '', $roman, $count4);
        // $integer = $integer + ($count4 * 40);

        // $roman = str_replace('IX', '', $roman, $count5);
        // $integer = $integer + ($count5 * 9);;

        // $roman = str_replace('IV', '', $roman, $count6);
        // $integer = $integer + ($count6 * 4);

        // $roman = str_replace('I', '', $roman, $count7);
        // $integer = $integer + ($count7 * 1);

        // $roman = str_replace('V', '', $roman, $count8);
        // $integer = $integer + ($count8 * 5);

        // $roman = str_replace('X', '', $roman, $count9);
        // $integer = $integer + ($count9 * 10);

        // $roman = str_replace('L', '', $roman, $count10);
        // $integer = $integer + ($count10 * 50);

        // $roman = str_replace('C', '', $roman, $count10);
        // $integer = $integer + ($count10 * 100);

        // $roman = str_replace('D', '', $roman, $count11);
        // $integer = $integer + ($count11 * 500);

        // $roman = str_replace('M', '', $roman, $count12);
        // $integer = $integer + ($count12 * 1000);

        // return $integer;


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
