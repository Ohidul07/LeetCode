class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function commonFactors($a, $b) {
        $sqa = floor(sqrt($a));
        $sqb = floor(sqrt($b));
        $arra = [1];
        $arrb = [1];
        $fiArr = [];
        for($i=2;$i<=$sqa;$i++) {
            if($a % $i == 0) {
                $res = $a / $i;
                $arra[] = $i;
                $arra[] = $res;
            }
        }
        $arra[] = $a;
        for($i=2;$i<=$sqb;$i++) {
            if($b % $i == 0) {
                $res = $b / $i;
                $arrb[] = $i;
                $arrb[] = $res;
            }    
        }
        $arrb[] = $b;
        for($i=0;$i<count($arra);$i++) {
            if(in_array($arra[$i], $arrb)) {
                if(!in_array($arra[$i], $fiArr)) {
                    $fiArr[] = $arra[$i];    
                }
            }    
        }
        return count($fiArr);
    }
}