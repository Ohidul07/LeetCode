class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findGCD($nums) {
        $min = $nums[0];
        $max = $nums[0];
        $lcd = 1;
        for($i=0;$i<count($nums);$i++) {
            if($min > $nums[$i]) {
                $min = $nums[$i];
            }
            if($max < $nums[$i]) {
                $max = $nums[$i];
            }
        }
        for($i=1;$i<=$min && $i<=$max;$i++) {
            if($min % $i == 0 && $max % $i ==0) {
                $lcd = $i;
            }
        }
        return $lcd;
    }
}