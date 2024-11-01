<?php
// 138. Copy List with Random Pointer
// https://leetcode.com/problems/copy-list-with-random-pointer/
// Runtime: 5ms | 100%
// Memory: 21.68mb | 47.37%
// Time:  O(n) | Space: O(n)

/**
 * Definition for a Node.
 */
class Node
{
    public $val = null;
    public $next = null;
    public $random = null;
    function __construct($val = 0)
    {
        $this->val = $val;
        $this->next = null;
        $this->random = null;
    }
}

class Solution
{
    /**
     * @param Node $head
     * @return Node
     */
    function copyRandomList($head)
    {
        if (!$head) return null;

        $oldToNew = [];
        $curr = $head;

        // First pass: create all nodes and put them in the map
        while ($curr) {
            $oldToNew[spl_object_hash($curr)] = new Node($curr->val);
            $curr = $curr->next;
        }

        // Second pass: set next and random pointers
        $curr = $head;
        while ($curr) {
            $newNode = $oldToNew[spl_object_hash($curr)];
            $newNode->next = isset($curr->next) ? $oldToNew[spl_object_hash($curr->next)] : null;
            $newNode->random = isset($curr->random) ? $oldToNew[spl_object_hash($curr->random)] : null;
            $curr = $curr->next;
        }

        return $oldToNew[spl_object_hash($head)];
    }
}
