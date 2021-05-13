<?php
	$i=0;
	while($i<=100){
		if($i==80){
			break;	
		}
		
		echo "number count: ".$i."</br>";
		$i+=10;
		
	}
	$color = array ("red","blue","white","black","pink");
	$counts = count($color);
	while($counts<=10){
		echo $counts."</br>";
		$counts++;
		
	}






?>