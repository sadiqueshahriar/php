<?php

$id =  $_GET['id'];


$link = mysqli_connect("localhost","root","","user_management");


if($link==true){
	
	
	
	$query="DELETE FROM registration WHERE id=$id";
	$sql=mysqli_query($link,$query);
	
	if($sql==true){
		
		header("Location: userlist.php?msg=Data DELETE Done");
	}
	else{
		header("Location: userlist.php?msg=Data DELETE Not Done");
	}
}
else{
	
}






?>