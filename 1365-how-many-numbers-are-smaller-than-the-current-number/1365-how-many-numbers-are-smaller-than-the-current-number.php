class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $resArr = [];
        for($i=0;$i<count($nums);$i++) {
            $count = 0;
            for($j=0;$j<count($nums);$j++) {
                if($nums[$i] > $nums[$j]) {
                    $count++;
                }    
            }
            $resArr[] = $count;
        }
        return $resArr;
    }
}