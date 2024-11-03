<?php
// 278. First Bad Version
// https://leetcode.com/problems/first-bad-version/
// Runtime: 32ms | 60%
// Memory: 19.85mb | 49.23%
// Time: O(log N) | Space: O(1) - Constant number of variables

/* The isBadVersion API is defined in the parent class VersionControl.
   public function isBadVersion($version){}
*/

class VersionControl {}

class Solution extends VersionControl
{
    /**
     * @param int $n
     * @return int
     */
    function firstBadVersion($n)
    {
        $l = 1;
        $r = $n;

        while ($l < $r) {
            $m = $l + floor(($r - $l) / 2);

            if ($this->isBadVersion($m)) {
                $r = $m;
            } else {
                $l = $m + 1;
            }
        }

        return $l; // or $r
    }
}
