<?php
// 15. 3Sum
// https://leetcode.com/problems/3sum/


class Solution
{
    /**
     * @param int[] $nums
     * @return int[][]
     */
    function threeSum($nums)
    {
        sort($nums);
        $result = [];
        for ($i = 0; $i < count($nums) - 2; $i++) {
            $fixNum = $nums[$i];
            if ($fixNum > 0)
                break;

            if ($i > 0 && $nums[$i - 1] === $fixNum)
                continue;

            $left = $i + 1;
            $right = count($nums) - 1;

            while ($left < $right) {
                $sum = $fixNum + $nums[$left] + $nums[$right];

                if ($sum > 0)
                    $right--;
                elseif ($sum < 0)
                    $left++;
                else {
                    $result[$fixNum . $nums[$left] . $nums[$right]] = [$fixNum, $nums[$left], $nums[$right]];
                    $right--;
                    $left++;
                }
            }
        }
        return array_values($result);
    }
}
