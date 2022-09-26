class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $original
     * @return Integer
     */
    function findFinalValue($nums, $original) {
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] == $original) {
                $original = $original * 2;
                $i=-1;
            }
        }
        return $original;
    }
}