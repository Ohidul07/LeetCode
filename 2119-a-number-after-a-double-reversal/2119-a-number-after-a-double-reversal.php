class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isSameAfterReversals($num) {
        $res1 = 0;
        $res2 = 0;
        $mi = $num;
        while($num >=1) {
            $rem = $num % 10;
            $num = $num / 10;
            $res1 = $res1 * 10 + $rem;
        }
        while($res1 >=1) {
            $rem = $res1 % 10;
            $res1 = $res1 / 10;
            $res2 = $res2 * 10 + $rem;
        }
        // print_r($mi);
        // echo "<br>";
        // print_r($res2);
        // die();
        if($mi == $res2) {
            return true;
        }
        return false;
    }
}