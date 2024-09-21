<?php
// 2239. Find Closest Number to Zero
// https://leetcode.com/problems/find-closest-number-to-zero/

class Solution
{

    /**
     * @param int[] $nums
     * @return int
     */
    function findClosestNumber($nums)
    {
        $closest = $nums[0];
        /*
        // Runtime 49ms - beats 42.42%
        // Memory 19.84mb - beats 85.61%
        foreach($nums as $num)
        {
            if(abs($num)<abs($closest)) $closest = $num;
            if(abs($closest)==$num) $closest = $num;
        }
        */

        /*
        // Runtime 48ms - beats 51.52%
        // Memory 19.68mb - beats 97.73%
        for($i=0;$i<count($nums);$i++)
        {
            $num = $nums[$i];
            if(abs($num)<abs($closest) || abs($closest)==$num) $closest = $num;
        }
        */

        /*
        // Runtime 50ms - beats 34.85%
        // Memory 19.18mb - beats 100%
        foreach($nums as $num)
        {
            if(abs($num)<abs($closest) || abs($closest)==$num) $closest = $num;
        }
        */

        /*
        // Runtime 43ms - beats 78.79%
        // Memory 20.07mb - beats 53.03%
        $size = count($nums);
        for($i=0;$i<$size;$i++)
        {
            $num = $nums[$i];
            $abs = abs($closest);
            if(abs($num)<$abs || $abs==$num) $closest = $num;
        }
        */

        /*
        // Runtime 38ms - beats 95.45%
        // Memory 20.28mb - beats 12.12%
        foreach($nums as $num)
        {
            $abs_n = abs($num);
            $abs_c = abs($closest);
            if($abs_n < $abs_c || $abs_c == $num) $closest = $num;
        }
        */

        // Runtime 38ms - beats 95.45%
        // Memory 20.28mb - beats 12.12%
        foreach ($nums as $num) {
            $abs_n = abs($num);
            $abs_c = abs($closest);
            if ($abs_n < $abs_c || $abs_c == $num) $closest = $num;
        }

        /*
        // Runtime 52ms - beats 24.24%
        // Memory 20.04mb - beats 53.03%
        for($i=0;$i<count($nums);$i++)
        {
            $num = $nums[$i];
            if(abs($num)<abs($closest)) $closest = $num;
        }

        if( $closest<0 && in_array(abs($closest), $nums)){
            return abs($closest);
        }
        */

        return $closest;
    }
}
