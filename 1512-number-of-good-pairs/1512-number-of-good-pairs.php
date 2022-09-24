class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $count = 0;
        $len = count($nums);
        for($i=0;$i<$len-1;$i++) {
            for($j=$i+1;$j<$len;$j++) {
                if($i<$j) {
                    if($nums[$i] == $nums[$j]) {
                        $count++;
                    }
                }
            } 
        }
        return $count;
    }
}