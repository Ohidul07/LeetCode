class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $maxC = $candies[0];
        $resArr = [];
        for($i=0;$i<count($candies);$i++) {
            if($maxC<$candies[$i]) {
                $maxC = $candies[$i];
            }    
        }
        for($i=0;$i<count($candies);$i++) {
            $gR = ($candies[$i])+$extraCandies;
            if((int)$gR >= (int)$maxC) {
                $resArr[] = true;    
            }
            else {
                $resArr[] = false;    
            }
        }
        return $resArr; 
    }
}