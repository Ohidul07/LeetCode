class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $resArray = [];
        $len = count($nums);
        for($i=0; $i<count($nums);$i++) {
            $resArray[$i] = $nums[$i];
        }
        for($i=0; $i<count($nums);$i++) {
            $resArray[$len+$i] = $nums[$i];
        }
        return $resArray;
    }
}