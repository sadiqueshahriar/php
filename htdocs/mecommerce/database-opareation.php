<?php

class DB{
	
	// Property
	
	// Method 
	
					var $servername = "localhost";
					var $username = "root";
					var $password = "";
					var $dbname = "mamurjor_ecommerce";
					
					
		
		
			public static function insert($query){
					$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mamurjor_ecommerce";

				// Create connection
				$link = mysqli_connect($servername,$username,$password,$dbname);



				$sql = mysqli_query($link,$query);


				if($sql==true){
					
					header("Location: product-list.php");
				}
				else{
					
					header("Location: product-list.php");
				}

				}
	
}




?>