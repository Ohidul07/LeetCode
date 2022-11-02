class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        $resArr1 =[];
        $resArr2 =[];
        $finArr =[];
        for($i=0;$i<count($nums1);$i++) {
            if(!in_array($nums1[$i], $nums2)) {
                if(!in_array($nums1[$i], $resArr1)) {
                    $resArr1[] = $nums1[$i];    
                }
            }    
        }
        $finArr[] = $resArr1;
        for($i=0;$i<count($nums2);$i++) {
            if(!in_array($nums2[$i], $nums1)) {
                if(!in_array($nums2[$i], $resArr2)) {
                    $resArr2[] = $nums2[$i];    
                }
            }    
        }
        $finArr[] = $resArr2;
        return $finArr;
    }
}