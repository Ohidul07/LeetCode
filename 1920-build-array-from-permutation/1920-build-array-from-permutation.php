class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $res = [];
        for($i=0;$i<count($nums);$i++) {
            $subRes = $nums[$nums[$i]];
            $res[] = $subRes;
        }
        return $res;
    }
}