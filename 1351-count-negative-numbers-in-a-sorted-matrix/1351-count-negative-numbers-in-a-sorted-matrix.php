class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $count = 0;
        for($i=0; $i < count($grid); $i++) {
            $lArr = $grid[$i];
            for($j=0;$j<count($lArr); $j++) {
                if($lArr[$j] < 0) {
                    $count++;
                }
            }
        }
        return $count;
    }
}