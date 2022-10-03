class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        $resArr = [];
        for($i=0;$i<count($nums)-1;$i++) {
            for($j=0;$j<count($nums)-$i-1;$j++) {
                if($nums[$j] > $nums[$j+1]) {
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j+1];
                    $nums[$j+1] = $temp;
                }    
            }    
        }
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] == $target) {
                $resArr[] = $i;    
            }
        }
        return $resArr;
    }
}