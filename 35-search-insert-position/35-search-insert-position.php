class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if($target < $nums[0]) {
            $res = 0;
            return $res;
        }
        else if($target > $nums[count($nums)-1]) {
            $res = count($nums);
            return $res;
        }
        else{
            for($i=0;$i<count($nums);$i++) {
                if($target == $nums[$i]) {
                    $res = $i;
                }
                
                else if($nums[$i] < $target && $target < $nums[$i+1]) {
                    $res = $i+1;    
                }
            }
            return $res;
        }
    }
}