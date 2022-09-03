class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
		$res = 0;
        $str = str_split($s);
        for($i=0; $i < count($str); $i++) {
        	if($str[$i] == 'I') {
            	if($str[$i] == 'I' && $str[$i+1] == 'V') {
                    $res = $res + 4;
                    $i++;
                }
                else if($str[$i] == 'I' && $str[$i+1] == 'X') {
                    $res = $res + 9;
                    $i++;
                }
                else {
                    $res = $res + 1;    
                }
            }
            else if($str[$i] == 'V') {
                $res = $res + 5;
            }
            else if($str[$i] == 'X') {
                if($str[$i] == 'X' && $str[$i+1] == 'L') {
                    $res = $res + 40;
                    $i++;
                }
                else if($str[$i] == 'X' && $str[$i+1] == 'C') {
                    $res = $res + 90;
                    $i++;
                }
                else {
                    $res = $res + 10;    
                }
            }
            else if($str[$i] == 'L') {
                $res = $res + 50;
            }
            else if($str[$i] == 'C') {
                if($str[$i] == 'C' && $str[$i+1] == 'D') {
                    $res = $res + 400;
                    $i++;
                }
                else if($str[$i] == 'C' && $str[$i+1] == 'M') {
                    $res = $res + 900;
                    $i++;
                }
                else {
                    $res = $res + 100;    
                }
            }
            else if($str[$i] == 'D') {
                $res = $res + 500;
            }
            else if($str[$i] == 'M') {
                $res = $res + 1000;
            }
        }
        return $res;
    }
}