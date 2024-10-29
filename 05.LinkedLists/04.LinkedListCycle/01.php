<?php
// 141. Linked List Cycle
// https://leetcode.com/problems/linked-list-cycle/
// Runtime: 6ms | 95%
// Memory: 23.16mb | 56.48%

/**
 * Definition for a singly-linked list.
 */
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @return bool
     */
    function hasCycle($head)
    {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $slow = $fast = $dummy;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow === $fast) {
                return true;
            }
        }

        return false;
    }
}
