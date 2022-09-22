class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $sum = 0;
        $res = 0;
        $resArray = [];
        for($i=0;$i<count($nums);$i++) {
            
            $res = $nums[$i] + $sum;
            $sum = $res;
            $resArray[] = $res;
        }
        return $resArray;
        //print_r($resArray);
        
    }
}