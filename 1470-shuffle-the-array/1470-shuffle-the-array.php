class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $resArr = [];
        for($i=0;$i<$n;$i++) {
            $resArr[] = $nums[$i];
            $resArr[] = $nums[$n+$i];
        }
        return $resArr;
    }
}