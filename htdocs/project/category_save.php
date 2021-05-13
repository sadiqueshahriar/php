<?php

$company_name= $_GET['company_name'];
$phone = $_GET['phone'];
$user_id =$_GET['user_id'];

$link=mysqli_connect("localhost","root","","mamurjor_ecommerce");


if($link==true){


	$query="INSERT INTO shipper(company_name,phone,user_id) VALUES('$company_name','$phone','$user_id')";
    //var_dump($query);
    //exit();

	$sql=mysqli_query($link,$query);

	if($sql==true){
		header("Location: category_list.php");
	}
	else{
		header("Location: category_form.php");
	}


}
else{
	echo "Sorry";
}

?>
