class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $max = 0;
        for($i=0;$i<count($accounts);$i++) {
            $sum = 0;
            for($j=0;$j<count($accounts[$i]);$j++) {
                $sum = $sum+$accounts[$i][$j];        
            }
            if($max < $sum) {
                $max = $sum;
            }
        }
        return $max;
    }
}