<?php
	
	$food = array ("meat","fish","chicken");
	echo "my fev food is :".$food[1]."</br>".$food[0]."</br>".$food[2]."</br>";//indexing array.
	echo count($food)."</br>";
	
	$color = array ("first"=>"white","second"=>"red","third"=>"black");//associative array.
	echo $color['first']."</br>".$color['third']."</br>";
	
	//multidimention array
	
	$product = array(array("shirt",10,7),array("pant",20,15),array("T_shirt",50,20));    
	/*echo $product[0][0]." in stock : ".$product[0][1]."  sell : ".$product[0][2]."</br>";
	echo $product[1][0]." in stock : ".$product[1][1]."  sell : ".$product[1][2]."</br>";
	echo $product[2][0]." in stock : ".$product[2][1]."  sell : ".$product[2][2]."</br>";*/
	
	for($row=0;$row<=2;$row++){
		echo "<p><b> row number $row </p></b>";
		echo "<ul>";	
	for($cols=0;$cols<=2;$cols++){
		echo "<li>".$product[$row][$cols]."</li>";
	}
	echo "</ul>";
	
	}













?>