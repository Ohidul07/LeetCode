class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n) {
        $res = 0;
        while($n>1) {
            if($n%2==0) {
                $res = $res + ($n/2);
                $n = $n/2;
            }
            if($n%2==1) {
                $res = $res + ($n-1)/2;
                $n = ($n-1)/2 + 1;
            }
        }
        return $res;  
    }
}