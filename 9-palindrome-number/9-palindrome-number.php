class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
$x1 = $x;
$res =0;
  while($x > 0) {
    $num = (int)($x/10);
    $rem = (int) ($x % 10);
    $res = ($res * 10) + $rem;
    $x = $num;
  }
  if((int)($x1) == (int)($res)) {
  	return true;
  }
  else {
  return false;
  }return false;
    }
    
}