class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $resArr = [];
        if(count($nums) == 1 && $nums[0] == 0) {
            return [0];
        }
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] % 2 == 0) {
                $resArr[] = $nums[$i];
            }
        }
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] % 2 == 1) {
                $resArr[] = $nums[$i];
            }
        }
        return $resArr;
    }
}