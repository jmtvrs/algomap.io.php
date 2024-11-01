<?php
// 19. Remove Nth Node From End of List
// https://leetcode.com/problems/remove-nth-node-from-end-of-list/
// Runtime: 0ms | 100%
// Memory: 20.10mb | 20.97%
// Time: O(n) | Space: O(1)

/**
 * Definition for a singly-linked list.
 */
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @param int $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $behind = $ahead = $dummy;

        for ($i = 0; $i <= $n; $i++) {
            $ahead = $ahead->next;
        }

        while ($ahead) {
            $behind = $behind->next;
            $ahead = $ahead->next;
        }

        $behind->next = $behind->next->next;

        return $dummy->next;
    }
}
