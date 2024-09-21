<?php
// 392. Is Subsequence
// https://leetcode.com/problems/is-subsequence/

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        // Runtime: 9ms | 36.36%
        // Memory: 19.41mb | 98.18%
        $found = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = 0; $j < strlen($t); $j++) {
                if ($s[$i] === $t[$j]) {
                    $i++;
                    $found++;
                }
            }
            if ($found <> strlen($s)) {
                return false;
            }
        }
        return true;
    }
}
