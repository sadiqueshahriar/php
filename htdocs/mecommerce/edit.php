<?php

$id =  $_GET['id'];

$link = mysqli_connect("localhost","root","","mamurjor_ecommerce");

if($link==true){
	
	
	$query = "UPDATE FROM products WHERE id=$id";
	
	$result=mysqli_query($link,$query);
	
	$rows=mysqli_fetch_assoc($result);
	
	
	
}
else{
	echo "Sorry";
}






?>