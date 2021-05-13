<?php
	
	$link=mysqli_connect("localhost","root","","anonymous");
	
		
		$query="SELECT * FROM products WHERE p_id=3";
		$show= mysqli_query($link,$query);
		
		while($result=mysqli_fetch_assoc($show)){

			 echo $result['p_name']."</br>";
			 echo $result['p_image']."</br>";
			 echo $result['p_number']."</br>";
			 echo $result['p_amount']."</br>";
			 echo $result['p_status']."</br>";
			 echo "<img src='images/".$result['p_image']."'alt=HTML5 Icon>";
			 
		
		}
		     
         
		
		
		
	






?>