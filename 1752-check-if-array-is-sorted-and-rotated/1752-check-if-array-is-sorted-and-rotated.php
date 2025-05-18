class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function check($nums) {
        $count = 0;
    $n = count($nums);
    for ($i = 0; $i < $n; $i++) {
        if ($nums[$i] > $nums[($i + 1) % $n]) {
            $count++;
            if ($count > 1) return false;
        }
    }
    return true;
}
}