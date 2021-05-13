<?php
	
	function product($productname){
		
		echo $productname;
		
		
	}
	
	product("bat </br>");
	product("football</br>");
	
	function price($bat,$ball){
		echo "Cricket bat price is : ".$bat."</br>"."Football price is : ".$ball."</br>";
		
	}
	price("700","500");
	
	function add(&$x){
		
		$x += 5;
		
	}
	$number=10;
	add($number);
	echo $number."</br>";
	
	function returns($x,$y){
		$z = $x+$y;
		return $z;
		
	
	}
	echo "5 + 5 = ".returns(5,5);


?>