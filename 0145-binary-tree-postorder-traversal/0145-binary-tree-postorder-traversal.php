/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root) {
         $result = [];
    if ($root === null) return $result;

    $stack = [];
    $lastVisited = null;
    $current = $root;

    while (!empty($stack) || $current !== null) {
        if ($current !== null) {
            array_push($stack, $current);
            $current = $current->left;
        } else {
            $peekNode = end($stack);
            if ($peekNode->right !== null && $lastVisited !== $peekNode->right) {
                $current = $peekNode->right;
            } else {
                array_pop($stack);
                $result[] = $peekNode->val;
                $lastVisited = $peekNode;
            }
        }
    }

    return $result;
        
    }
}