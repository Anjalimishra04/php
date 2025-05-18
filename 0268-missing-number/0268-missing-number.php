class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
         $n = count($nums);
    $total = $n * ($n + 1) / 2;
    return $total - array_sum($nums);
    }
}