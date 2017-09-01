<?php 
function solution(Int $n){
	$a= str_split($n);
	$p=count($a);
	$q=1;
	for ($i=0; $i < 9 ; $i++) { 
		$q*=fact(substr_count($n,$i));
	}
	echo fact($p)/$q;
}
function fact($nbr) 
{ 
   if($nbr === 0) // condition d'arret 
      return 1;  
  	else 
      return $nbr*fact($nbr-1); 
}  
solution(1123);
?>
<script type="text/javascript">
    function factorial(n) {
      if (n <=1)
        return 1;
      return n * factorial(n-1);
    }
    
    function getPermutations(number) {
      var n = number.toString().split('').length;
      var r = {};
      number.toString().split('').forEach(function(digit){
          r[digit] = r[digit] || 0;
          r[digit] += 1;
      });
      
      var z = number.toString().split('').reduce(function(count, digit) {
        return (digit === '0') ? count + 1 : count;
      }, 0);
      
      var denominator = Object.keys(r).map(function (key) { return r[key]; }).reduce(function(result, curr) {
        return result * factorial(curr);
      }, 1);
      
      // console.log(n, r, z);
      return (n - z) * factorial(n - 1) / denominator;
    
    }
    
    var result = getPermutations(1123);
    console.log(result);
    </script>

