<?php
// 21. Merge Two Sorted Lists
// https://leetcode.com/problems/merge-two-sorted-lists/
// Runtime: 0ms | 100%
// Memory: 19.86mb | 65.50%

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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2)
    {

        $dummy = new ListNode(0);
        $cur = $dummy;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val < $list2->val) {
                $cur->next = $list1;
                $list1 = $list1->next;
            } else {
                $cur->next = $list2;
                $list2 = $list2->next;
            }
            $cur = $cur->next;
        }

        $cur->next = $list1 !== null ? $list1 : $list2;

        return $dummy->next;
    }
}
