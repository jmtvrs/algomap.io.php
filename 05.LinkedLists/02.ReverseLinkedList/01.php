<?php
// 206. Reverse Linked List
// https://leetcode.com/problems/reverse-linked-list/
// Runtime: 0ms | 100%
// Memory: 21.30mb | 58.82%

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {
        $curr = $head;
        $prev = null;

        while ($curr) {
            $temp = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $temp;
        }

        return $prev;
    }
}
