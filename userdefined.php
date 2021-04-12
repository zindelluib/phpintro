<?php 
	
	function test(){
		echo "test() function ran ...";
	}

	function displaySum($x=1,$y=10){
		$sum  = $x  + $y;
		echo "<br>Sum = "  .  $sum;
	}

	function getProduct($num1,$num2){
		return $num1 * $num2;
	}

	test();
	displaySum(10,34);
	displaySum();
	displaySum(45);
	echo "<br>";
	echo "The product of 2 and 7 is "  . getProduct(2,7); 

?>