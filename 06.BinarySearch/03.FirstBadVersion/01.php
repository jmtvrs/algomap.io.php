<?php
// 278. First Bad Version
// https://leetcode.com/problems/first-bad-version/
// Runtime: 29ms | 66.67%
// Memory: 19.79mb | 69.23%
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
        $l = 0;
        $r = $n;

        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);

            if ($this->isBadVersion($m)) {
                $r = $m;
            } else {
                $l = $m + 1;
            }

            if ($r === $l) {
                return $l;
            }
        }

        return $n;
    }
}
