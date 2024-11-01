<?php
// 876. Middle of the Linked List
// https://leetcode.com/problems/middle-of-the-linked-list/
// Runtime: 0ms | 100%
// Memory: 20.16mb | 12.90%

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
     * @return ListNode
     */
    function middleNode($head)
    {
        $slow = $fast = $head;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return $slow;
    }
}
