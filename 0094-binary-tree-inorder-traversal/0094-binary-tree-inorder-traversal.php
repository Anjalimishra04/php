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
    function inorderTraversal($root) {
         $result = [];
        $stack = [];
        $current = $root;

        while ($current !== null || !empty($stack)) {
            while ($current !== null) {
                array_push($stack, $current);
                $current = $current->left;
            }

            $current = array_pop($stack);
            $result[] = $current->val;
            $current = $current->right;
        }

        return $result;
    }
        
    }
