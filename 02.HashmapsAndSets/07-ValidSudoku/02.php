<?php
// 36. Valid Sudoku
// https://leetcode.com/problems/valid-sudoku/
// Runtime: 22ms | 95%
// Memory: 19.90mb | 50%

class Solution
{
    /**
     * @param string[][] $board
     * @return bool
     */
    function isValidSudoku($board)
    {
        $inRow = [];
        $inCol = [];
        $inBox = [];

        foreach ($board as $rowN => $row) {
            foreach ($row as $colN => $cell) {
                if ($cell === '.') {
                    continue;
                }
                if (isset($inRow[$rowN][$cell])) {
                    return false;
                }
                $inRow[$rowN][$cell] = true;
                if (isset($inCol[$colN][$cell])) {
                    return false;
                }
                $inCol[$colN][$cell] = true;

                $boxN = (intval($rowN / 3) * 3) + intval($colN / 3);
                if (isset($inBox[$boxN][$cell])) {
                    return false;
                }
                $inBox[$boxN][$cell] = true;
            }
        }

        return true;
    }
}
