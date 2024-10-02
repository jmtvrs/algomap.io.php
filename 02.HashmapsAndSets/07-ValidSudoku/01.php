<?php
// 36. Valid Sudoku
// https://leetcode.com/problems/valid-sudoku/
// Runtime: 43ms | 5.21%
// Memory: 19.93mb | 52.08%

class Solution
{
    /**
     * @param string[][] $board
     * @return bool
     */
    function isValidSudoku($board)
    {

        // Lines
        foreach ($board as $r => $row) {
            $row = array_filter($row, function ($v) {
                return intval($v) > 0;
            });
            if (count(array_unique($row)) < count($row)) {
                return false;
            }
        }

        // Columns
        for ($i = 0; $i < 9; $i++) {
            $tmp = [];
            for ($j = 0; $j < 9; $j++) {
                if (intval($board[$j][$i]) > 0) {
                    $tmp[] = $board[$j][$i];
                }
            }

            if (count(array_unique($tmp)) < count($tmp)) {
                return false;
            }
        }

        // Each 3x3
        for ($i = 0; $i < 9; $i += 3) {

            for ($j = 0; $j < 9; $j += 3) {

                $gridRowStart = $i;
                $gridColStart = $j;

                $tmp = [];
                for ($r = $gridRowStart; $r < $gridRowStart + 3; $r++) {
                    for ($c = $gridColStart; $c < $gridColStart + 3; $c++) {
                        if (intval($board[$r][$c]) > 0) {
                            $tmp[] = $board[$r][$c];
                        }
                    }
                }
                if (count(array_unique($tmp)) < count($tmp)) {
                    return false;
                }
            }
        }

        return true;
    }
}
