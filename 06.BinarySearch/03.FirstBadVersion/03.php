<?php
// 278. First Bad Version
// https://leetcode.com/problems/first-bad-version/
// Runtime: 24ms | 93.33%
// Memory: 19.95mb | 30.77%
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
        $m = 0;
        while ($l <= $r) {
            $m = $l + floor(($r - $l) / 2);
            if ($this->isBadVersion($m)) {
                if ($this->isBadVersion($m - 1)) $r = $m - 1;
                else return $m;
            } else $l = $m + 1;
        }
    }
}
