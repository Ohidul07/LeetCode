class Solution {

    /**
     * @param Integer $num1
     * @param Integer $num2
     * @return Integer
     */
    function countOperations($num1, $num2) {
        $count = 0;
        if($num1 == 0 || $num2 ==0) {
            return $count;
        }
        while($num1 != $num2) {
            if($num1 > $num2) {
                $num1 = $num1 - $num2;
                $num2 = $num2;
                $count++;
            }
            else if($num1 < $num2) {
                $num2 = $num2 - $num1;
                $num1 = $num1;
                $count++;
            }
        }
        
        if($num1 == $num2) {
            $count++;
        }
        return $count;
    }
}