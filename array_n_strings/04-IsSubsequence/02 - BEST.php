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
        // Runtime: 0ms | 100%
        // Memory: 19.96mb | 62.18%
        if (strlen($s) > strlen($t)) {
            return false;
        }

        if ($s === "") {
            return true;
        }

        $tLen = strlen($t);
        $sLen = strlen($s);
        $i = 0;

        for ($j = 0; $j < $tLen; $j++) {
            if ($t[$j] === $s[$i]) {
                $i++;
                if ($i === $sLen) return true;
            }
        }
        return false;
    }
}
