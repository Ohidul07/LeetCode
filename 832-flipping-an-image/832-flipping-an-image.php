class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
      $mulArr =[];
      for($i=0;$i<count($image);$i++) {
        $sinArr = [];
        $a = $image[$i];
        $l = count($a);

        for($j=$l-1;$j>=0;$j--) {
            if($a[$j] == 0) {
                $a[$j] = 1;    
            }
            else if($a[$j] == 1) {
                $a[$j] = 0;    
            }
          $sinArr[] = $a[$j];    
        }
        $mulArr[] = $sinArr;
      }
      return $mulArr;
    }
}