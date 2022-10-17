class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isThree($n) {
        if($n ==0 || $n==1) {
            return false;
        }
        $p = sqrt($n);
        $resArr = [1];
        for($i=2;$i<=$p;$i++) {
            if($n % $i == 0) {
                $v = $n / $i;
                if(! in_array($i,$resArr)) {
                    $resArr[] = $i;
                }
                if(! in_array($v,$resArr)) {
                    $resArr[] = $v;
                }
            }
        }
        $resArr[] = $n;
        
        
        if(count($resArr) == 3) {
            return true;
        }
        else {
            return false;
        }
    }
}