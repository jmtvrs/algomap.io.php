<?php
// 14. Longest Common Prefix
// https://leetcode.com/problems/longest-common-prefix/

class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        // Runtime: 11ms | 35.58%
        // Memory: 20.16mb | 34.53%

        if (!isset($strs[1])) return $strs[0][0];
        //         if($strsSize==1){
        //     return $prefix;
        // }

        $output = $prefix = '';
        $firstStr = $strs[0];
        $firstStrLen = strlen($firstStr);
        $countWrds = count($strs);

        for ($l = 0; $l < $firstStrLen; $l++) {
            $prefix .= $firstStr[$l];
            $w = 1;
            while (str_starts_with($strs[$w], $prefix)) {
                $w++;
            }
            if ($countWrds <> $w) break;
            $output = $prefix;
        }
        return $output;
    }
}
