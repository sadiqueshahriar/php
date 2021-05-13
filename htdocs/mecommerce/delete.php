<?php

$id =  $_GET['id'];


$link = mysqli_connect("localhost","root","","mamurjor_ecommerce");


if($link==true){
	
	
	
	$query="DELETE FROM products WHERE id=$id";
	$sql=mysqli_query($link,$query);
	
	if($sql==true){
		
		header("Location: product-list.php?msg=Data DELETE Done");
	}
	else{
		header("Location: product-list.php?msg=Data DELETE Not Done");
	}
}
else{
	
}






?>