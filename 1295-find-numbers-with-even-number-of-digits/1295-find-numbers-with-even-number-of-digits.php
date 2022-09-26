class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $count=0;
        for($i=0;$i<count($nums);$i++) {
            $cnum = $nums[$i];
            $lchk = 0;
            while($cnum > 0) {
                $lchk++;	
                $cnum = (int)($cnum / 10);
            }
            if($lchk % 2==0) {
                $count++;
            }
        }
        return $count;
    }
}