class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $resArr =[];
        for($i=0;$i<count($nums1);$i++) {
            if(in_array($nums1[$i], $nums2)) {
                if(!in_array($nums1[$i], $resArr)) {
                    $resArr[] = $nums1[$i];    
                }
            }    
        }
        return $resArr;
    }
}