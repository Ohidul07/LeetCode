class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $count = 0;
        for($i=0;$i<count($items);$i++) {
            if($ruleKey == 'type' && $ruleValue == $items[$i][0]) {
                $count++;
            }
            else if($ruleKey == 'color' && $ruleValue == $items[$i][1]) {
                $count++;
            }
            else if($ruleKey == 'name' && $ruleValue == $items[$i][2]) {
                $count++;
            }
        }
        return $count;
    }
}