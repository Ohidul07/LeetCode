class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumOfUnique($nums) {
        $resArr = [];
        $res = 0;
        for($i=0; $i<count($nums);$i++) {
            $count=0;
            for($j=0; $j<count($nums);$j++) {
                if($nums[$i] == $nums[$j]) {
                    $count++;
                }    
            }
            if($count == 1) {
                $res = $res + $nums[$i];
            }
        }
        return $res;
    }
}