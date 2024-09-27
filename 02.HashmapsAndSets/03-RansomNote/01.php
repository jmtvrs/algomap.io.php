<?php
// 383. Ransom Note
// https://leetcode.com/problems/ransom-note/description
// Runtime: 13ms | 84.39%
// Memory: 21.68mb | 40.98%

class Solution
{

    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return bool
     */
    function canConstruct($ransomNote, $magazine)
    {
        $ransomBd = array_count_values(str_split($ransomNote));
        $magazineBd = array_count_values(str_split($magazine));
        foreach ($ransomBd as $letter => $count) {
            if (!isset($magazineBd[$letter]) || $magazineBd[$letter] < $count) {
                return false;
            }
        }
        return true;
    }
}
