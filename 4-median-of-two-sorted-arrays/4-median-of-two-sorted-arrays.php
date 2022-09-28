class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $t1 = count($nums1);
        $t2 = count($nums2);
        $t1Sum = 0;
        $t2Sum = 0;
        $resArr = [];
        for($i=0;$i<$t1;$i++) {
            $resArr[$i] = $nums1[$i];
        }
        for($j=0;$j<$t2;$j++) {
            $resArr[$t1+$j] = $nums2[$j];
        }
        for($i=0;$i<count($resArr);$i++) {
            for($j=0;$j<count($resArr)-1;$j++) {
                if($resArr[$j] > $resArr[$j+1]) {
                    $temp = $resArr[$j];
                    $resArr[$j] = $resArr[$j+1];
                    $resArr[$j+1] = $temp;
                }
            }
        }
        if(count($resArr) % 2 == 1) {
            $resPos = (count($resArr) / 2);
            $res = $resArr[$resPos]; 
        }
        else if(count($resArr) % 2 == 0) {
            $resPos = (count($resArr) / 2);
            $res = ($resArr[$resPos] + $resArr[$resPos-1]) / 2; 
        }
        return (float)$res;
    }
}