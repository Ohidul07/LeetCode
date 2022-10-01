class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
          $resArr = [];
          $fx = [-1,-1];
          for($i=0;$i<count($nums);$i++) {
            if($nums[$i] == $target) {
              $resArr[] = $i;    
            }    
          }

          if(count($resArr) == 1) {
            return [$resArr[0],$resArr[0]];
          }
          else if(count($resArr) > 1) {
            return [$resArr[0],$resArr[count($resArr)-1]];
          }
          else {
            return $fx;    
          }
    }
}